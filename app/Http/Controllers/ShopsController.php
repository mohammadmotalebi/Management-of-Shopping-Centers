<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CurrentUser;
use App\Imports\ShopItemsImport;
use App\Imports\ShopsImport;
use App\Imports\SupplierImport;
use App\Models\Bill;
use App\Models\Estate;
use App\Models\ItemCode;
use App\Models\Shop;
use App\Models\ShopItem;
use App\Models\User;
use App\Repository\LookUpRepositoryInterface;
use App\Repository\usersRepositoryFolder\usersRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShopsController extends Controller
{


    protected $usersRepositoryQueries;
    protected $lookUp;


    public function __construct(LookUpRepositoryInterface $lookUp, usersRepositoryInterface $usersRepositoryQueries)
    {
        $this->usersRepositoryQueries = $usersRepositoryQueries;
        $this->lookUp = $lookUp;
        $this->rr = randomString();
        $this->middleware('auth');
    }

    private function validation()
    {
        $rules = [
            'shop_name' => 'required',
        ];
        $messages = [
            'shop_name.required' => __('validation.required', ['attr' => __('lang.shop_name')])];
        $this->validate(request(), $rules, $messages);
    }

    public function index()
    {
        $shops = Shop::get();
        return response()->json($shops);
    }

    public function create()
    {
        $estates = Estate::all();
        return view('Shops.create', ['estates' => $estates ]);
    }

    public function store(Request $request)
    {
        $this->validation();
        $u = randomCode(setting()->number_of_shop_unique_code_digit);
        $unique = Shop::where('shop_unique_id', $u)->get();
        if (count($unique) < 1) {
            $int = $u;
        } else {
            $int = randomCode(4);
        }
        try {
            DB::beginTransaction();
            $shop = new Shop([
                'shop_name' => $request->get('shop_name'),
                'shop_unique_id' => $int,
                'email' => $request->get('email'),
                'website' => $request->get('website'),
                'estate_id' => $request->get('estate_id')
            ]);
            $shop->save();
            DB::commit();
            if ($shop->id > 0) {
                $s = Shop::find($shop->id);
                $s->users()->sync(\request('owners'));
                return 1;
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return 0;
        }

    }


    public function show($id)
    {
        $shop = Shop::find($id);
        return view('Shops.view', ['shop' => $shop]);
    }


    public function edit($id)
    {
        $estates = Estate::all();
        $shop = Shop::find($id);
        $users = Shop::find($id)->users()->get();
        $owners = array();
        foreach ($users as $user) {
            array_push($owners, $user->id);
        }
        return view('Shops.edit', ['shop' => $shop, 'estates' => $estates, 'owners' => $owners]);
    }


    public function update(Request $request)
    {
        $this->validation();
        $id = $request->id;
        $shop = Shop::whereId($id)->update([
            'shop_name' => $request->get('shop_name'),
            'email' => $request->get('email'),
            'website' => $request->get('website'),
            'estate_id' => $request->get('estate_id'),
        ]);
        if ($shop) {
            $s = Shop::find($id);
            $s->users()->sync(\request('owners'));
            return 1;
        }
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        Shop::find($id)->delete();
    }


    public function getIndex()
    {
        return view('Shops.Shops');

    }

    public function shopDetail($id)
    {
        return Shop::whereId($id)->first();
    }

    public function anyData($fav = 0)
    {
        if ($fav == 0) {
            $shops = DB::table('Shops')
                ->select('id', 'shop_name', 'shop_unique_id', 'website')
                ->selectRaw('(select user_id from shop_user_fav where shop_id = shops.id and user_id = ?) as fav', [CurrentUserID()])
                ->get();
        } else {
            if ($shops = User::find(CurrentUserID())->favShops()->whereId($fav)->get()) {
                $shops = Shop::whereId($fav)->get();
            }
        }
        return $shops;
    }

    public function confirmSell(): array
    {
        return DB::select('SELECT        shop_items.item_name, bills.id, shop_items.shop_id,item_prices.item_price price, item_codes.item_code, bills.buy_date, bills.user_id customer
,(select user_id from shop_user where shop_id = shop_items.shop_id) as shopper
FROM shop_items
     INNER JOIN item_codes ON shop_items.unique_code=item_codes.item_id
     RIGHT OUTER JOIN bill_items
                      INNER JOIN bills ON bill_items.bill_id=bills.id
                      INNER JOIN shops ON bills.shop_id=shops.id
                      LEFT OUTER JOIN item_credits ON bill_items.item_credit_id=item_credits.id
                      LEFT OUTER JOIN item_scores ON bill_items.item_score_id=item_scores.id
                      LEFT OUTER JOIN item_prices ON bill_items.item_price_id=item_prices.id ON item_codes.id=bill_items.item_id
						 where (select user_id from shop_user where shop_id = shop_items.shop_id) = ? and bills.status = ?', [CurrentUserID(), 0]);
    }

    public function countOfApproveBill(): int
    {
        $sql = DB::select('SELECT count(bills.id) bills
FROM shop_items
     INNER JOIN item_codes ON shop_items.unique_code=item_codes.item_id
     RIGHT OUTER JOIN bill_items
                      INNER JOIN bills ON bill_items.bill_id=bills.id
                      INNER JOIN shops ON bills.shop_id=shops.id
                      LEFT OUTER JOIN item_credits ON bill_items.item_credit_id=item_credits.id
                      LEFT OUTER JOIN item_scores ON bill_items.item_score_id=item_scores.id
                      LEFT OUTER JOIN item_prices ON bill_items.item_price_id=item_prices.id ON item_codes.id=bill_items.item_id
						 where (select user_id from shop_user where shop_id = shop_items.shop_id) = ? and bills.status = ?', [CurrentUserID(), 0]);
        return $sql[0]->bills;
    }

    public function approveBill(): int
    {
        $update = Bill::find(request('id'))->update(['status' => 1]);
        if ($update == 1) {
            $sql = DB::select('SELECT        count(bills.id) bills
FROM            users RIGHT OUTER JOIN
                         bill_items INNER JOIN
                         bills ON bill_items.bill_id = bills.id INNER JOIN
                         item_codes ON bill_items.item_id = item_codes.id INNER JOIN
                         shop_items ON item_codes.item_id = shop_items.id LEFT OUTER JOIN
                         shops ON bills.shop_id = shops.id ON users.id = bills.user_id
						 where (select user_id from shop_user where shop_id = shop_items.shop_id) = ? and bills.status = ?', [CurrentUserID(), 0]);
            return $sql[0]->bills;
        } else {
            return 'error';
        }
    }

    public function anyFavData($fav = 0)
    {
        if ($fav == 0) {
            $shops = User::find(CurrentUserID())->favShops()->get();
        } else {
            if ($shops = User::find(CurrentUserID())->favShops()->whereId($fav)->get()) {
                $shops = Shop::whereId($fav)->get();
            }
        }
        return $shops;
    }

    public function Items()
    {
        return view('Shop_Items.Shop_Items_modal');
    }

    public function ItemData($id)
    {
        return DB::select('SELECT shop_items.item_name,shop_items.shop_id,shop_items.unique_code, shop_items.id,
       item_categories.item_category, item_categories.id category_id,dbo.item_types.item_type,dbo.item_types.id type_id,
dbo.item_models.item_model,dbo.item_models.id model_id,dbo.item_suppliers.item_supplier,dbo.item_suppliers.id supplier_id,
dbo.item_sizes.item_size,dbo.item_colors.item_color,dbo.item_sizes.id size_id,dbo.item_colors.id color_id,
	(SELECT count(*) e FROM bill_items INNER JOIN
	bills ON bill_items.bill_id = bills.id LEFT OUTER JOIN
	item_codes ON bill_items.item_id = item_codes.id
	WHERE item_codes.item_id = dbo.shop_items.unique_code and (bills.status = 1)) Sold
	,((SELECT COUNT(*) FROM dbo.item_codes WHERE item_id = dbo.shop_items.unique_code) - (SELECT count(*) d FROM bill_items INNER JOIN
	bills ON bill_items.bill_id = bills.id LEFT OUTER JOIN
	item_codes ON bill_items.item_id = item_codes.id
	WHERE item_codes.item_id = dbo.shop_items.unique_code and (bills.status = 1))) Remain,
	(SELECT        COUNT(bills.id)
FROM            bill_items INNER JOIN
                         bills ON bill_items.bill_id = bills.id INNER JOIN
                         item_codes ON bill_items.item_id = item_codes.id
						 WHERE dbo.item_codes.item_id = dbo.shop_items.unique_code and bills.status = 0) Approve,
	(SELECT TOP 1 item_price FROM dbo.item_prices WHERE unique_code = dbo.shop_items.unique_code ORDER BY add_date DESC) price,
	(SELECT TOP 1 item_score FROM dbo.item_scores WHERE unique_code = dbo.shop_items.unique_code ORDER BY add_date DESC) score,
	(SELECT TOP 1 item_credit FROM dbo.item_credits WHERE unique_code = dbo.shop_items.unique_code ORDER BY add_date DESC) credit,
	(SELECT COUNT(*) FROM dbo.item_codes WHERE item_id = dbo.shop_items.unique_code) TotalItem
FROM            shop_items LEFT OUTER JOIN
                         item_categories ON shop_items.item_cat_id = item_categories.id LEFT OUTER JOIN
						 item_types ON shop_items.item_type_id = dbo.item_types.id LEFT OUTER JOIN
						 item_models ON shop_items.item_model_id = dbo.item_models.id LEFT OUTER JOIN
						 dbo.item_suppliers ON shop_items.item_supplier_id = dbo.item_suppliers.id LEFT OUTER JOIN
						 dbo.item_sizes ON shop_items.item_size_id = dbo.item_sizes.id LEFT OUTER JOIN
						 dbo.item_colors ON shop_items.item_color_id = dbo.item_colors.id
	WHERE (shop_items.shop_id = ?)', [$id]);
    }
    public function shopperItemData($id)
    {

        return ShopItem::where('shop_id', $id)->get();

    }


    public function getShopperHome(): array
    {
        $c = 0;
        $shops = \App\Models\User::find(CurrentUserID())->shops()->pluck('id')->all();
        $details = DB::select('SELECT bills.shop_id, SUM(CAST(item_scores.item_score AS INT)) UsedScore, SUM(CAST(item_credits.item_credit AS INT)) UsedCredit
FROM shop_items
     INNER JOIN item_codes ON shop_items.unique_code=item_codes.item_id
     RIGHT OUTER JOIN bill_items
                      INNER JOIN bills ON bill_items.bill_id=bills.id
                      INNER JOIN shops ON bills.shop_id=shops.id
                      LEFT OUTER JOIN item_credits ON bill_items.item_credit_id=item_credits.id
                      LEFT OUTER JOIN item_scores ON bill_items.item_score_id=item_scores.id
                      LEFT OUTER JOIN item_prices ON bill_items.item_price_id=item_prices.id ON item_codes.id=bill_items.item_id
					  WHERE        (bills.shop_id in (?))
GROUP BY bills.shop_id',[(int) implode(',',$shops)]);
        $shopperCredit = User::find(CurrentUserID())->credits()->sum('credit');

        foreach ($details as $detail) {
            $c += $detail->UsedCredit;
        }
        if ($shopperCredit - $c > 0) {
            $status = 1;
        } else {
            $status = 0;
        }

        $sells = DB::select('SELECT        TOP (1) users.id, COALESCE(SUM(CAST(item_prices.item_price AS INT)),0) AS sell
FROM            users LEFT OUTER JOIN
                         bill_items INNER JOIN
                         item_scores ON bill_items.item_score_id = item_scores.id INNER JOIN
                         item_prices ON bill_items.item_price_id = item_prices.id INNER JOIN
                         item_credits ON bill_items.item_credit_id = item_credits.id INNER JOIN
                         bills ON bill_items.bill_id = bills.id ON users.id = bills.user_id LEFT OUTER JOIN
                         item_codes ON bill_items.item_id = item_codes.id
WHERE        (users.id = ?)
GROUP BY users.id', [CurrentUserID()]);


        return ['RemainCredit' => ($shopperCredit - $c) ?? 0, 'status' => $status ?? 0, 'Details' => $details[0] ?? '', 'totalSell' => number_format($sells[0]->sell) ?? 0];
    }

    public function getSellsList($id)
    {
        return $this->usersRepositoryQueries->shopSellsDetail(CurrentUserID(), $id);
    }

    public function getFirstShop()
    {
        return User::find(CurrentUserID())->shops()->first(['id', 'shop_name']);
    }

    public function addToFav()
    {
        User::find(CurrentUserID())->favShops()->attach(request('id'));
    }

    public function deleteFromFav()
    {
        User::find(CurrentUserID())->favShops()->detach(request('id'));
    }

    public function importShop(Request $request): int
    {

        $r = randomString();

        $request->excel_file->storeAs('excel', 'excel_' . $r . '.xlsx', 'upload');
        if (\Storage::disk('upload')->exists('excel/excel_' . $r . '.xlsx')) {
            Excel::import(new ShopsImport(), 'excel/excel_' . $r . '.xlsx', 'upload');
            return 1;
        }
        return 0;

    }

    public function importItemShop()
    {
        $r = randomString();
        try {
            \DB::beginTransaction();
            \request('item-excel_file')->storeAs('', 'excel_' . $r . '.xlsx', 'excel');
            if (\Storage::disk('excel')->exists('excel_' . $r . '.xlsx')) {
                $import = new ShopItemsImport(\request('shop'));
                $import->onlySheets(0, 1);
                Excel::import($import, 'excel_' . $r . '.xlsx', 'excel');
                sleep(3);
                Excel::import((new ShopItemsImport(\request('shop')))->onlySheets(2), 'excel_' . $r . '.xlsx', 'excel');
                \DB::commit();
                sleep(2);
                \Storage::disk('excel')->delete('excel_' . $r . '.xlsx');
                return 1;
            }
        } catch (\Throwable $throwable) {

            \DB::rollBack();

            return $throwable;

        }

    }

}
