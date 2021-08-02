<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index(){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();

        // $orders = DB::table('products')
        //         ->select('subcategory_id', DB::raw('count(*) as count'))
        //         ->groupBy('subcategory_id')
        //         ->get();

                $orders = DB::table('products')
                ->select('products.subcategory_id','subcategories.id','subcategories.image', DB::raw('COUNT(subcategories.id) as counts'))
                ->rightJoin('subcategories','products.subcategory_id','=','subcategories.id')
                ->groupBy('products.subcategory_id')
                ->get();
                return $orders;
        
        $orders =DB::table('products')
                ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
                ->select('products.subcategory_id', 'subcategories.name', 'subcategories.image')
                ->get();
        return view('index',compact('subcategories','categories','orders'));
    }

    public function popularCategories()
    {

        $orders = DB::table('products')
                ->select('subcategory_id', DB::raw('count(*) as count'))
                ->groupBy('subcategory_id')
                ->get();

    }
}
