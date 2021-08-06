<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class ProductsViewController extends Controller
{
    public function index($filterby, $value){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        

        switch($filterby){
            case 'category':
                $products = $this->getByCategory($value);
                break;
            case 'subcategory':
                $products = $this->getBySubcategory($value);
                break;
            case 'ecommerce':
                $products = $this->getByEcommerce($value);
                break;
            case 'price':
                $products = $this->getByPrice($value);
                break;
            case 'suggestedProducts':
                $products = $this->suggestedProducts();
                break;
            case 'newarrivals':
                $products = $this->getByDate();
                break;
            case 'sales':
                $products = $this->sales();
                break;
            case 'hotdeals':
                $products = $this->hotDeals();
                break;
        }
        
        return view('products',compact('subcategories','categories', 'ecommerces', 'products', 'value'));
    }


    public function getByCategory($value)
    {
        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->join('subcategories','products.subcategory_id', '=', 'subcategories.id')
            ->join('categories','subcategories.category_id', '=', 'categories.id')
            ->where('categories.name', '=', $value)
            ->paginate(20);

        return $products;
    }

    public function getBySubcategory($value)
    {
        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->join('subcategories','products.subcategory_id', '=', 'subcategories.id')
            ->where('subcategories.name', '=', $value)
            ->paginate(20);

        return $products;
    }

    public function getByEcommerce($value)
    {
        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->where('ecommerces.name', '=', $value)
            ->paginate(20);

        return $products;
    }

    public function getByPrice($value)
    {
        $limit = explode(" - ", str_replace('$','', $value));
        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->where('products.regular_price', '>', $limit[0])
            ->paginate(20);

        return $products;
    }

    public function getByDate()
    {

        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->orderBy('products.updated_at', 'DESC')
            ->paginate(20);

        return $products;
    }

    public function hotDeals()
    {    
        $hotDeals = DB::table('hot_deals')
            ->select('hot_deals.product_id', 'hot_deals.deal_starts', 'hot_deals.deal_ends',  'products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('products','hot_deals.product_id', '=', 'products.id')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','hot_deals.product_id', '=', 'product_images.product_id')
            ->paginate(20);

        return $hotDeals;
    }

    public function sales()
    {

        $saleProducts = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->orderBy('products.sale_price', 'DESC')
            ->where('products.sale_price', '>', 0)
            ->paginate(20);

        return $saleProducts;
    }

    public function suggestedProducts()
    {

        if(session('user')){
        $customer_id = DB::table('customers')->where('username', session('user'))->value('id');

        $suggestedProducts = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->join('user_product_logs','products.id', '=', 'user_product_logs.product_id')
            ->orderBy('user_product_logs.no_of_clicks', 'DESC')
            ->where('user_product_logs.customer_id', '=', $customer_id)
            ->paginate(20);
        }
        else{
            $suggestedProducts = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->join('user_product_logs','products.id', '=', 'user_product_logs.product_id')
            ->orderBy('user_product_logs.no_of_clicks', 'DESC')
            ->paginate(20);
        }

        return $suggestedProducts;
    }


    public function search(Request $request)
    {
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();

        if (str_contains($request->category, 'sub')) { 
            $subcategory = str_replace('sub','', $request->category);
        }

        if($request->category == -1){
            $products = DB::table('products')
                ->select('products.*', 'product_images.image_1',  'ecommerces.name')
                ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
                ->join('product_images','products.id', '=', 'product_images.product_id')
                ->join('subcategories','products.subcategory_id', '=', 'subcategories.id')
                ->where('products.title', 'like', '%' . $request->value . '%')
                ->paginate(20);
        }
        elseif (str_contains($request->category, 'sub')) { 
            $subcategory = str_replace('sub','', $request->category);

            $products = DB::table('products')
                ->select('products.*', 'product_images.image_1',  'ecommerces.name')
                ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
                ->join('product_images','products.id', '=', 'product_images.product_id')
                ->join('subcategories','products.subcategory_id', '=', 'subcategories.id')
                ->where('subcategories.id', '=', $subcategory)
                ->where('products.title', 'like', '%' . $request->value . '%')
                ->paginate(20);
        }
        else{
            $products = DB::table('products')
                ->select('products.*', 'product_images.image_1',  'ecommerces.name')
                ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
                ->join('product_images','products.id', '=', 'product_images.product_id')
                ->join('subcategories','products.subcategory_id', '=', 'subcategories.id')
                ->join('categories','subcategories.category_id', '=', 'categories.id')
                ->where('categories.id', '=', $request->category)
                ->where('products.title', 'like', '%' . $request->value . '%')
                ->paginate(20);
        }

        return view('products',compact('subcategories','categories', 'ecommerces', 'products'));
    }
}
