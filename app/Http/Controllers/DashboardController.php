<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function dashBoard(){
        $no_products = DB::table('products')->get()->count();
        $users = DB::table('users')->get()->count();
        $ecommerces = DB::table('ecommerces')->get()->count();
        $log = DB::table('user_product_logs')
            ->select(DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'), DB::raw('SUM(user_product_logs.no_of_views) as total_views'))
            ->first();

        $products_list = DB::table('products')
            ->select('products.*', 'product_images.image_1', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'), )
            ->leftJoin('user_product_logs','products.id', '=', 'user_product_logs.product_id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->groupBy('products.id')
            ->orderBy('total_clicks', 'DESC')
            ->take(10)
            ->get();

           
       
        return view('admin.dashboard',compact('no_products','users','ecommerces','products_list','log'));
    }
}