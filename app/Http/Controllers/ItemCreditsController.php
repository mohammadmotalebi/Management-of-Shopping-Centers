<?php

namespace App\Http\Controllers;

use App\Models\ItemCredit;
use App\Models\ItemPrice;
use App\Models\ItemScore;
use App\Models\ShopItem;
use App\Models\ItemCode;

class ItemCreditsController extends Controller
{
    public function index($unique_code)
    {
        return ItemCredit::where('unique_code', 'like', $unique_code)->limit(1)->get();
    }

    public function create()
    {
        return view('Shop_Items.credit.create');
    }

    public function store()
    {
        $codes = ItemCode::where('item_id', cache('uc'))->get();
        \Cache::forget('credit');
        try {
            foreach ($codes as $code) {
                ItemCredit::create([
                    'item_credit' => arabicToEnglishNumber(str_replace(',', '', \request('item_credit'))),
                    'item_code' => $code->item_code,
                    'unique_code' => cache('uc'),
                    'add_date' => fullDate(),
                    'start_date' => \request('start_date'),
                    'end_date' => \request('end_date'),
                    'status' => 1,
                ]);

            }
            cache()->rememberForever('credit',  function (){
                return ItemCredit::where('unique_code',cache('uc'))->limit(1)->get();
            });
            return 1;
        } catch (\Exception $e) {
            return $e;
        }

    }

    public function destroyNullItem($unique_code)
    {
        if (ShopItem::where('unique_code', $unique_code)->count() < 1) {
            ItemCredit::where('unique_code', $unique_code)->delete();
            ItemPrice::where('unique_code', $unique_code)->delete();
            ItemScore::where('unique_code', $unique_code)->delete();
        }
    }
}
