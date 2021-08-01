<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Product;

class ProductController extends Controller
{
    //Get All Products
    public function getProducts(){
        $products = DB::table('products')->get();
        return view('admin.items_list',compact('products'));
    }

    //Get All Brands
    public function getBrands(){
        $brands = DB::table('brands')->get();
        $categories = DB::table('categories')->get();
        return view('admin.add_item',compact('brands','categories'));
    }


    //Add product
    public function addProduct(){
        return view('admin.add_item');
    }

    public function addProductSubmit(Request $request){
        DB::table('products')->insert([
            'title'=> $request->title,
            'short_description'=>$request->short_description,
            'description'=>$request->description,
            'brand_id'=>$request->brand_id,
            'regular_price'=>$request->regular_price,
            'sale_price'=>$request->sale_price,
            'affiliate_link'=>$request->affiliate_link,
            "created_at"=> Carbon::now(),
            "updated_at"=> now()
        ]);
            return back()->with('added','Success');
    }

    //get Single product
    public function getProductById($id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('admin.single_product',compact('product'));
    }

    //delete product
    public function deleteProduct($id){
        $product = DB::table('products')->where('id',$id)->delete();
        return back()->with('product_deleted','Product has been deleted successfully!');
    }

    //update product
    public function editProduct($id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('admin.edit_item',compact('product'));
    }

    public function updateProduct(Request $request){
        DB::table('products')->where('id', $request->id)->update([
            'title'=> $request->title,
            'short_description'=>$request->short_description,
            'description'=>$request->description,
            'regular_price'=>$request->regular_price,
            'sale_price'=>$request->sale_price,
            'affiliate_link'=>$request->affiliate_link,
            "created_at"=> Carbon::now(),
            "updated_at"=> now()

        ]);
        return back()->with('product_updated','Product has been updated successfully!');
    }

    // public function insert(){
        
    //     $product = new Product();
    //     $product->title="hello";
    //     $product->short_description="nnnnnnn";
    //     $product->description="rrrrrrrr";
    //     $product->regular_price="1500";
    //     $product->sale_price="1000";
    //     $product->affiliate_link="www.google.com";
    //     $product->created_at=Carbon::now();
    //     $product->updated_at=now();
    //     $brand = new Brand();
    //     $brand->name="niro";
    //     $brand->save();
    //     $brand->product()->save($product);
    //     return "created";
    // }
}
