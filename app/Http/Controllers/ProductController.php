<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Product_images;

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
        $subcategories = DB::table('subcategories')->get();
        $ecommerces= DB::table('ecommerces')->get();
        return view('admin.add_item',compact('brands','subcategories','ecommerces'));
    }


    //Add product
    public function addProduct(){
        $brands = DB::table('brands')->get();
        $subcategories = DB::table('subcategories')->get();
        $ecommerces= DB::table('ecommerces')->get();
        return view('admin.add_item',compact('brands','subcategories','ecommerces'));
    }

    // public function addProductSubmit(Request $request){
    //     DB::table('products')->insert([
    //         'title'=> $request->title,
    //         'short_description'=>$request->short_description,
    //         'description'=>$request->description,
    //         'brand_id'=>$request->brand_id,
    //         'regular_price'=>$request->regular_price,
    //         'sale_price'=>$request->sale_price,
    //         'affiliate_link'=>$request->affiliate_link,
    //         "created_at"=> Carbon::now(),
    //         "updated_at"=> now()
    //     ]);
    //         return back()->with('added','Success');
    // }

    //get Single product
    public function getProductById($id){
        $product = DB::table('products')->where('id',$id)->first();
        $ecommerces = DB::table('ecommerces')->get();
        $brands = DB::table('brands')->get();
        $subcategories = DB::table('subcategories')->get();
        $images = DB::table('product_images')->get();
        return view('admin.single_product',compact('product','ecommerces','subcategories','brands','images'));
    }

    //delete product
    public function deleteProduct($id){
        $product = DB::table('products')->where('id',$id)->delete();
        return back()->with('product_deleted','Product has been deleted successfully!');
    }

    //update product
    public function editProduct($id){
        $product = DB::table('products')->where('id',$id)->first();
        $ecommerces = DB::table('ecommerces')->get();
        $subcategories = DB::table('subcategories')->get();
        $brands = DB::table('brands')->get();
        $images = DB::table('product_images')->get();
        return view('admin.edit_item',compact('product','ecommerces','subcategories','brands','images'));
    }

    // public function updateProduct(Request $request){
    //     if(isset($request->stock_status)){
    //         $flge=1;
    //     }
    //     else{
    //         $flge=0;
    //     }

    //     $id = $request->id;
    //     $title = $request->title;
    //     $short_description = $request->short_description;
    //     $description = $request->description;
    //     $subcategory_id = $request ->subcategory_id;
    //     $brand_id = $request ->brand_id;
    //     $ecommerce_id = $request ->ecommerce_id;
    //     $regular_price = $request->regular_price;
    //     $sale_price = $request ->sale_price;
    //     $affiliate_link = $request ->affiliate_link;

    //     $image1 = $request->file('image1');
    //     $image2 = $request->file('image2');
    //     $image3 = $request->file('image3');
    //     $image4 = $request->file('image4');

    //     $images = DB::table('product_images')->where('id',$id)->first();

    //     if($image1==null){
    //         $image1_flage = $images->image_1; 
    //     }
    //     elseif($image2 == null){
    //         $image2_flage = $images->image_2;
    //     }
    //     elseif($image3 == null){
    //         $image3_flage = $images->image_3;
    //     }
    //     elseif($image4 == null){
    //         $image4_flage = $images->image_4;
    //     }

    //     // DB::table('products')->where('id', $request->id)->update([
    //     //     'title'=> $request->title,
    //     //     'short_description'=>$request->short_description,
    //     //     'description'=>$request->description,
    //     //     'regular_price'=>$request->regular_price,
    //     //     'sale_price'=>$request->sale_price,
    //     //     'affiliate_link'=>$request->affiliate_link,
    //     //     'stock_status'=>$flge,
    //     //     "created_at"=> Carbon::now(),
    //     //     "updated_at"=> now()

    //     // ]);
    //     return back()->with('product_updated','Product has been updated successfully!');
    // }

    public function addProductSubmit(Request $request){
        
        
        $title = $request->title;
        $short_description = $request->short_description;
        $description = $request->description;
        $subcategory_id = $request ->subcategory_id;
        $brand_id = $request ->brand_id;
        $ecommerce_id = $request ->ecommerce_id;
        $regular_price = $request->regular_price;
        $sale_price = $request ->sale_price;
        $affiliate_link = $request ->affiliate_link;
        
        $image1 = $request->file('image1');
        $imageName1='assets/images/product/'.$title.time().'/'.$title.'1.'.$image1->extension();
        $image1->move("assets/images/product/$title".time(),$imageName1);

        $image2 = $request->file('image2');
        $imageName2='assets/images/product/'.$title.time().'/'.$title.'2.'.$image2->extension();
        $image2->move("assets/images/product/$title".time(),$imageName2);

        $image3 = $request->file('image3');
        $imageName3='assets/images/product/'.$title.time().'/'.$title.'3.'.$image3->extension();
        $image3->move("assets/images/product/$title".time(),$imageName3);

        $image4 = $request->file('image4');
        $imageName4='assets/images/product/'.$title.time().'/'.$title.'4.'.$image4->extension();
        $image4->move("assets/images/product/$title".time(),$imageName4);

        $product_images = new Product_images();
        
        $product_images->image_1=$imageName1;
        $product_images->image_2=$imageName2;
        $product_images->image_3=$imageName3;
        $product_images->image_4=$imageName4;

        $product = new Product();
        $product->title=$title;
        $product->short_description=$short_description;
        $product->description=$description;
        $product ->subcategory_id = $subcategory_id;
        $product ->brand_id = $brand_id;
        $product ->ecommerce_id = $ecommerce_id;
        $product->regular_price=$regular_price;
        $product->sale_price=$sale_price;
        $product->affiliate_link=$affiliate_link;
        $product->created_at=Carbon::now();
        $product->updated_at=now();
        $product->save();
        $product->images()->save($product_images);
        return back()->with('added','Success');
    }



    public function createForm(){
        return view('image-upload');
      }
    
    
      public function fileUpload(Request $req){
        $req->validate([
          'image_1' => 'required',
          'image_1.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
    
        if($req->hasfile('image_1')) {
            foreach($req->file('image_1') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);  
                $imgData[] = $name;  
            }
    
            $fileModal = new Product_images();
            $fileModal->image_1 = json_encode($imgData);
            
           
            $fileModal->save();
    
           return back()->with('success', 'File has successfully uploaded!');
        }
      }
}
