<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillItem;
use App\Models\ItemCode;
use App\Models\ItemImage;
use App\Models\ItemPrice;
use App\Models\ItemScore;
use App\Models\ItemCredit;
use App\Models\ShopItem;
use App\Models\User;
use App\Repository\usersRepositoryFolder\usersRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    protected $usersRepositoryQueries;

    public function __construct(usersRepositoryInterface $usersRepositoryQueries)
    {
        $this->usersRepositoryQueries = $usersRepositoryQueries;
        $this->middleware('auth');

    }

    public function index()
    {
        if (request()->ajax()) {
            return view('loading');
        } else {


            $y = 0;
            $z = 0;
            $s = array();
            $w = 0;
            $score = 0;
            $l = array();
            $ll = array();
            $id = CurrentUserID();
            if (count($this->usersRepositoryQueries->usersActivationQuery($id)) > 0) {
                foreach ($this->usersRepositoryQueries->usersActivationQuery($id) as $k => $x) {
                    $y += $x->total;
                    $z += $x->totalcredit;
                    $w += $x->totalscore;


                    if ($z > 0) {
                        $score = number_format($z);
                    } else if ($w > 0) {
                        $score = $w;
                    } else {
                        $score = 0;
                    }

                    $s[] = $x->buy_date;

                }
                if (count($s) > 1) {
                    $ss = max($s);
                } else {
                    $ss = $s[0];
                }

                $q = User::find($id)->cards()->orderBy('status', 'desc')->get();
                $data = array('total' => number_format($y) ?? '', 'credit' => $score ?? '', 'card' => $q ?? '', 'latest' => $ss ?? '', 'report' => $this->usersRepositoryQueries->usersActivationQuery($id), 'reportLast' => $this->usersRepositoryQueries->usersActivationQuery($id, 1));
            } else {
                $data = array();
            }

            $total = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            $credit = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            $score = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            $yearChart = DB::select("SELECT        bills.[user_id],cast(SUBSTRING(bills.buy_date, 6, 2) as int) buy_month, sum(cast(item_prices.item_price as float)) total, sum(cast(item_scores.item_score as float)) score, sum(cast(item_credits.item_credit as float)) credit
FROM shop_items
     INNER JOIN item_codes ON shop_items.unique_code=item_codes.item_id
     RIGHT OUTER JOIN bill_items
                      INNER JOIN bills ON bill_items.bill_id=bills.id
                      INNER JOIN shops ON bills.shop_id=shops.id
                      LEFT OUTER JOIN item_credits ON bill_items.item_credit_id=item_credits.id
                      LEFT OUTER JOIN item_scores ON bill_items.item_score_id=item_scores.id
                      LEFT OUTER JOIN item_prices ON bill_items.item_price_id=item_prices.id ON item_codes.id=bill_items.item_id
						 where user_id = :id and SUBSTRING(bills.buy_date, 1, 4) = :y
						 group by bills.[user_id],SUBSTRING(bills.buy_date, 6, 2)", ['id' => $id, 'y' => jdate('Y')]);

            foreach ($yearChart as $k => $x) {

                $total[$x->buy_month - 1] = ($x->total) ?? 0;
                $credit[$x->buy_month - 1] = ($x->credit) ?? 0;
                $score[$x->buy_month - 1] = ($x->score) ?? 0;

            }

            $tot = array();
            $year = array();

            $totalChart = DB::select("SELECT bills.[user_id], CAST(SUBSTRING(bills.buy_date, 1, 4) AS INT) buy_year, SUM(CAST(item_prices.item_price AS BIGINT)) total, SUM(CAST(item_scores.item_score AS BIGINT)) score, SUM(CAST(item_credits.item_credit AS BIGINT)) credit
FROM shop_items
     INNER JOIN item_codes ON shop_items.unique_code=item_codes.item_id
     RIGHT OUTER JOIN bill_items
                      INNER JOIN bills ON bill_items.bill_id=bills.id
                      INNER JOIN shops ON bills.shop_id=shops.id
                      LEFT OUTER JOIN item_credits ON bill_items.item_credit_id=item_credits.id
                      LEFT OUTER JOIN item_scores ON bill_items.item_score_id=item_scores.id
                      LEFT OUTER JOIN item_prices ON bill_items.item_price_id=item_prices.id ON item_codes.id=bill_items.item_id
						    where user_id = ?
						    group by bills.[user_id],SUBSTRING(bills.buy_date, 1, 4)", [$id]);

            foreach ($totalChart as $k => $x) {

                $tot[] = ($x->total) ?? 0;
                $year[] = ($x->buy_year) ?? 0;

            }


            return view('home', ['data' => $data, 'tot' => implode(',', $tot), 'year' => implode(',', $year), 'total' => implode(',', $total), 'credit' => implode(',', $credit), 'score' => implode(',', $score)]);

        }
    }

    public function getData()
    {

        $y = 0;
        $z = 0;
        $s = array();
        $w = 0;
        $score = 0;
        $id = CurrentUserID();
        if (count($this->usersRepositoryQueries->usersActivationQuery($id)) > 0) {
            foreach ($this->usersRepositoryQueries->usersActivationQuery($id) as $x) {
                $y += $x->total;
                $z += $x->totalcredit;
                $w += $x->totalscore;


                if ($z > 0) {
                    $score = number_format($z);
                } else if ($w > 0) {
                    $score = $w;
                } else {
                    $score = 0;
                }

                $s[] = $x->buy_date;

            }
            if (count($s) > 1) {
                $ss = max($s);
            } else {
                $ss = $s[0];
            }

            if (setting()->credit_by_credit == 1) {
                $cashless_score = ($z / setting()->cash_score) * setting()->cashless_score;
            } else if (setting()->credit_by_price == 1) {
                $cashless_score = ($y / setting()->cash_score) * setting()->cashless_score;
            }


            $q = User::find($id)->cards()->orderBy('status', 'desc')->get();
            $data = array('total' => number_format($y) ?? '', 'tCredit' => number_format($z), 'tScore' => $w, 'cashlessScore' => $cashless_score, 'credit' => $score ?? '', 'card' => $q ?? [], 'latest' => $ss ?? '', 'report' => $this->usersRepositoryQueries->usersActivationQuery($id), 'reportLast' => $this->usersRepositoryQueries->usersActivationQuery($id, 1));
        } else {
            $q = User::find($id)->cards()->orderBy('status', 'desc')->get();
            $data = array('total' => 0, 'tCredit' => 0, 'tScore' => 0, 'cashlessScore' => 0, 'credit' => 0, 'card' => $q ?? [], 'latest' => [], 'report' => [], 'reportLast' => []);
        }

        $loyalty = 0;
        $sql = DB::table('customer_enter_exit')
            ->selectRaw('shopping_date, CAST(((isnull(DATEDIFF(MINUTE,start_time ,end_time),0)
             / (select base_time_for_score from settings)) *
              (select score_of_in_store from settings)) as decimal(18,2)) stay_time')
            ->where('user_id', CurrentUserID())
            ->get();
        foreach ($sql as $s) {
            $loyalty += $s->stay_time;
        }


        $total = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        $credit = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        $score = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        $yearChart = DB::select("SELECT bills.user_id,CAST(SUBSTRING(bills.buy_date, 6, 2) AS int) AS buy_month, SUM(CAST(item_scores.item_score AS INT)) score, SUM(CAST(item_credits.item_credit AS INT)) credit, SUM(CAST(item_prices.item_price AS INT)) total
FROM shop_items
     INNER JOIN item_codes ON shop_items.unique_code=item_codes.item_id
     RIGHT OUTER JOIN bill_items
                      INNER JOIN bills ON bill_items.bill_id=bills.id
                      INNER JOIN shops ON bills.shop_id=shops.id
                      LEFT OUTER JOIN item_credits ON bill_items.item_credit_id=item_credits.id
                      LEFT OUTER JOIN item_scores ON bill_items.item_score_id=item_scores.id
                      LEFT OUTER JOIN item_prices ON bill_items.item_price_id=item_prices.id ON item_codes.id=bill_items.item_id
					  where user_id = :id and SUBSTRING(bills.buy_date, 1, 4) = :y and bills.status = :s
GROUP BY bills.user_id, SUBSTRING(bills.buy_date, 6, 2)", ['id' => $id, 'y' => jdate('Y'), 's' => 1]);

        foreach ($yearChart as $x) {

            $total[$x->buy_month - 1] = ($x->total) ?? 0;
            $credit[$x->buy_month - 1] = ($x->credit) ?? 0;
            $score[$x->buy_month - 1] = ($x->score) ?? 0;

        }

        $tot = array();
        $year = array();

        $totalChart = DB::select("SELECT bills.[user_id],cast(SUBSTRING(bills.buy_date, 1, 4) as int) buy_year, SUM(CAST(item_scores.item_score AS INT)) score, SUM(CAST(item_credits.item_credit AS INT)) credit, SUM(CAST(item_prices.item_price AS INT)) total
FROM shop_items
     INNER JOIN item_codes ON shop_items.unique_code=item_codes.item_id
     RIGHT OUTER JOIN bill_items
                      INNER JOIN bills ON bill_items.bill_id=bills.id
                      INNER JOIN shops ON bills.shop_id=shops.id
                      LEFT OUTER JOIN item_credits ON bill_items.item_credit_id=item_credits.id
                      LEFT OUTER JOIN item_scores ON bill_items.item_score_id=item_scores.id
                      LEFT OUTER JOIN item_prices ON bill_items.item_price_id=item_prices.id ON item_codes.id=bill_items.item_id
					  WHERE        (bills.user_id = ?) AND (bills.status = ?)
group by bills.[user_id],SUBSTRING(bills.buy_date, 1, 4)", [$id, 1]);

        foreach ($totalChart as $x) {

            $tot[] = ($x->total) ?? 0;
            $year[] = ($x->buy_year) ?? 0;

        }
        $userInfo = (object)[
            'fullName' => Auth::user()->name . ' ' . Auth::user()->family,
            'img' => Auth::user()->user_pic ?? '',
            'identity_code' => Auth::user()->identity_code ?? '',
            'id' => Auth::user()->id,
            'active_card' => $q = User::find($id)->cards()->orderBy('status', 'desc')->first() ?? ''
        ];
        $userRole = User::find($id)->roles()->get();

        return ['user_info' => $userInfo, 'role' => $userRole[0]->id, 'role_name' => $userRole[0]->name, 'tLoyalty' => $loyalty ?? 0, 'cyear' => jdate('Y') ?? '', 'data' => $data, 'tot' => $tot, 'year' => $year, 'total' => $total, 'credit' => $credit, 'score' => $score];

    }

    public function item_detail()
    {
        $id = request('id');
        $code_exist = ItemCode::where('item_code',$id)->count();
        $unique_code = ItemCode::where('item_code',$id)->first()->item_id;
        if($code_exist > 0) {
            try {
                $sql = DB::table('shop_items')
                    ->rightJoin('shops', 'shop_items.shop_id', '=', 'shops.id')
                    ->leftJoin('item_categories', 'shop_items.item_cat_id', '=', 'item_categories.id')
                    ->leftJoin('item_models', 'shop_items.item_model_id', '=', 'item_models.id')
                    ->leftJoin('item_types', 'shop_items.item_type_id', '=', 'item_types.id')
                    ->leftJoin('item_colors', 'shop_items.item_color_id', '=', 'item_colors.id')
                    ->leftJoin('item_credits', 'shop_items.unique_code', '=', 'item_credits.unique_code')
                    ->leftJoin('item_scores', 'shop_items.unique_code', '=', 'item_scores.unique_code')
                    ->leftJoin('item_prices', 'shop_items.unique_code', '=', 'item_prices.unique_code')
                    ->leftJoin('item_codes', 'shop_items.unique_code', '=', 'item_codes.item_id')
                    ->leftJoin('item_sizes', 'shop_items.item_size_id', '=', 'item_sizes.id')
                    ->select(DB::raw('shop_items.item_name, item_prices.item_price, item_models.item_model,
                     item_colors.item_color, item_sizes.item_size, item_credits.item_credit, item_scores.item_score,
                     item_codes.item_code, shops.shop_name, shop_items.unique_code, shop_items.id AS itemId,
                     item_categories.id AS categoryId, item_categories.item_category, item_types.item_type, item_colors.id AS colorId,
                     item_models.id AS modelId,item_sizes.id AS sizeId, item_types.id AS typeId'))
                    ->where('item_codes.item_code', $id)->first();
                $images = ItemImage::where('unique_code', $unique_code)->get()->pluck('image_url');
                            $sql->img = $images;
                return $sql;
            } catch (\Exception $e) {
                report($e);
                return $e;
            }
        }else{
            return 0;
        }


    }

    public function saveItem($id)
    {

        $item = ItemCode::where('item_code', $id)->first();
        $item_unique_code = $item->item_id;
        $item_price = ItemPrice::where('unique_code', $item_unique_code)->first();
        $item_credit = ItemCredit::where('unique_code', $item_unique_code)->first();
        $item_score = ItemScore::where('unique_code', $item_unique_code)->first();
        $shop_id = ShopItem::where('unique_code', $item_unique_code)->first()->shop_id;
        $latestBillNumber = Bill::orderBy('bill_number', 'desc')->first();
        if (isset($latestBillNumber)) {
            $currentBillNumber = $latestBillNumber->bill_number + 1;
        } else {
            $currentBillNumber = 100;
        }




        try {
            DB::beginTransaction();
            $bill = new Bill([
                'bill_number' => $currentBillNumber,
                'shop_id' => $shop_id,
                'user_id' => CurrentUserID(),
                'buy_date' => fullDate(),
                'status' => 0,
            ]);
            $bill->save();
            $bill_id = $bill->id;
            $bill_item = new BillItem([
                'bill_id' => $bill_id,
                'item_id' => $item->id,
                'item_price_id' => $item_price->id ?? 0,
                'item_credit_id' => $item_credit->id ?? 0,
                'item_score_id' => $item_score->id ?? 0,
            ]);
            $bill_item->save();

            DB::commit();
            if (($bill->id > 0) and ($bill_item->id > 0)) {
                return '1';
            } else {
                DB::rollback();
                return '0';
            }
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
            // Handle errors
        }


    }

    public function cardsList()
    {
        return User::find(CurrentUserID())->cards()->orderBy('status', 'desc')->get();
    }


}
