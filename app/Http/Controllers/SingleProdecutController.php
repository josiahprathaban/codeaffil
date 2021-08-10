<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SingleProdecutController extends Controller
{
    public function index($id)
    {
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        $product = $this->getProductById($id);
        $suggestedProducts = $this->suggestedProducts();
        $sameCategoryProducts = $this->sameCategoryProducts($id);
        return view('single-product', compact('subcategories', 'categories', 'ecommerces', 'product', 'suggestedProducts', 'sameCategoryProducts', 'id'));
    }

    public function getProductById($id)
    {
        $customer_id = DB::table('customers')->where('username', session('user'))->value('id');
        if (session('type') == 'customer') {
            if (DB::table('user_product_logs')->where('customer_id', $customer_id)->where('product_id', $id)->exists()) {
                DB::table('user_product_logs')
                    ->where('customer_id', $customer_id)
                    ->where('product_id', $id)
                    ->update(['no_of_views' => DB::raw('no_of_views + 1')]);
            } else {
                DB::table('user_product_logs')->insert([
                    'customer_id' => $customer_id,
                    'product_id' => $id,
                    'no_of_views' => 1,
                    'no_of_clicks' => 0
                ]);
            }
        } else {
            if (DB::table('user_product_logs')->where('customer_id', null)->where('product_id', $id)->exists()) {
                DB::table('user_product_logs')
                    ->where('customer_id', null)
                    ->where('product_id', $id)
                    ->update(['no_of_views' => DB::raw('no_of_views + 1')]);
            } else {
                DB::table('user_product_logs')->insert([
                    'product_id' => $id,
                    'no_of_views' => 1,
                    'no_of_clicks' => 0
                ]);
            }
        }

        $product = DB::table('products')
            ->select('products.*', 'ecommerces.logo', 'ecommerces.name as ecommerce', 'brands.name as brand', 'product_images.image_1', 'product_images.image_2', 'product_images.image_3', 'product_images.image_4', 'subcategories.name as subcategory')
            ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
            ->join('ecommerces', 'products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('products.id', $id)
            ->first();

        return $product;
    }

    public function no_of_clicks($id)
    {
        $link = DB::table('products')->where('id', $id)->value('affiliate_link');
        $customer_id = DB::table('customers')->where('username', session('user'))->value('id');
        if (session('type') == 'customer') {
            DB::table('user_product_logs')
                ->where('customer_id', $customer_id)
                ->where('product_id', $id)
                ->update(['no_of_clicks' => DB::raw('no_of_clicks + 1')]);
        } else {
            DB::table('user_product_logs')
                ->where('customer_id', null)
                ->where('product_id', $id)
                ->update(['no_of_clicks' => DB::raw('no_of_clicks + 1')]);
        }

        $subcategory_id = DB::table('products')->where('id', $id)->value('subcategory_id');
        DB::table('subcategories')
            ->where('id', $subcategory_id)
            ->update(['no_of_clicks' => DB::raw('no_of_clicks + 1')]);

        $category_id = DB::table('subcategories')->where('id', $subcategory_id)->value('category_id');
        DB::table('categories')
            ->where('id', $category_id)
            ->update(['no_of_clicks' => DB::raw('no_of_clicks + 1')]);

        $brand_id = DB::table('products')->where('id', $id)->value('brand_id');
        DB::table('brands')
            ->where('id', $brand_id)
            ->update(['no_of_clicks' => DB::raw('no_of_clicks + 1')]);

        $ecommerce_id = DB::table('products')->where('id', $id)->value('ecommerce_id');
        DB::table('ecommerces')
            ->where('id', $ecommerce_id)
            ->update(['no_of_clicks' => DB::raw('no_of_clicks + 1')]);

        return redirect()->away($link);
    }

    public function suggestedProducts()
    {

        if (session('user')) {
            $customer_id = DB::table('customers')->where('username', session('user'))->value('id');

            $suggestedProducts = DB::table('products')
                ->select('products.id', 'products.title', 'products.regular_price', 'products.sale_price', 'product_images.image_1',  'ecommerces.name')
                ->join('ecommerces', 'products.ecommerce_id', '=', 'ecommerces.id')
                ->join('product_images', 'products.id', '=', 'product_images.product_id')
                ->join('user_product_logs', 'products.id', '=', 'user_product_logs.product_id')
                ->orderBy('user_product_logs.no_of_clicks', 'DESC')
                ->where('user_product_logs.customer_id', '=', $customer_id)
                ->take(10)
                ->get();
            if ($suggestedProducts->count() == 0) {
                $suggestedProducts = DB::table('products')
                    ->select('products.*', 'product_images.image_1',  'ecommerces.name')
                    ->join('ecommerces', 'products.ecommerce_id', '=', 'ecommerces.id')
                    ->join('product_images', 'products.id', '=', 'product_images.product_id')
                    ->join('user_product_logs', 'products.id', '=', 'user_product_logs.product_id')
                    ->orderBy('user_product_logs.no_of_clicks', 'DESC')
                    ->take(10)
                    ->get();
            }
        } else {
            $suggestedProducts = DB::table('products')
                ->select('products.id', 'products.title', 'products.regular_price', 'products.sale_price', 'product_images.image_1',  'ecommerces.name')
                ->join('ecommerces', 'products.ecommerce_id', '=', 'ecommerces.id')
                ->join('product_images', 'products.id', '=', 'product_images.product_id')
                ->join('user_product_logs', 'products.id', '=', 'user_product_logs.product_id')
                ->orderBy('user_product_logs.no_of_clicks', 'DESC')
                ->take(10)
                ->get();
        }

        return $suggestedProducts;
    }

    public function sameCategoryProducts($id)
    {
        $cat_id = DB::table('products')->where('id', $id)->value('subcategory_id');

        $sameCategoryProducts = DB::table('products')
            ->select('products.id', 'products.title', 'products.regular_price', 'products.sale_price', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces', 'products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->where('products.subcategory_id', '=', $cat_id)
            ->take(10)
            ->get();

        return $sameCategoryProducts;
    }
}
