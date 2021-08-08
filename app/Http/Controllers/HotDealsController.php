<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hot_deals;

class HotDealsController extends Controller
{

    //Get All Hot Deals
    public function getHotDeals()
    {
        $hotdeals = DB::table('hot_deals')->get();
        $products = DB::table('products')->get();
        return view('admin.hot_deals', compact('hotdeals', 'products'));
    }

    public function addHotDealSubmit(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'hotdeal_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        $id = $request->product_id;
        $name = $request->hotdeal_name;
        $start_date = $request->start_date;
        $end_date = $request ->end_date;

        $hotdeal = new Hot_deals();
        $hotdeal->product_id = $id;
        $hotdeal->deal_title = $name;
        $hotdeal->deal_starts = $start_date;
        $hotdeal ->deal_ends = $end_date;
        $hotdeal->save();
        return back()->with('hd_added', 'Hotdeal has been added successfully!');
    }

    public function updateHotdeal(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'hotdeal_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $product_id = $request->product_id;
        $name = $request->hotdeal_name;
        $start_date = $request->start_date;
        $end_date = $request ->end_date;

        $hotdeal = Hot_deals::find($request->hotdeal_id);
        $hotdeal->product_id = $product_id;
        $hotdeal->deal_title = $name;
        $hotdeal->deal_starts = $start_date;
        $hotdeal ->deal_ends = $end_date;
        $hotdeal->save();
        return back()->with('hd_updated', 'Hotdeal has been updated successfully!');

        }
    }


