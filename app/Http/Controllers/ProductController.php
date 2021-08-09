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
    //Get All Products with Sort
    public function getProducts(Request $request)
    {
        $filter = $request->filter;
        $search = $request->search;

        if (isset($search)) {
            $products = DB::table('products')
                ->select('products.*', 'product_images.image_1', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),)
                ->leftJoin('user_product_logs', 'products.id', '=', 'user_product_logs.product_id')
                ->join('product_images', 'products.id', '=', 'product_images.product_id')
                ->where('products.title', 'LIKE', "%{$search}%")
                ->groupBy('products.id')
                ->orderBy('products.id', 'ASC')
                ->take(10)
                ->paginate(10);
            return view('admin.items_list', compact('products', 'search'));
        } else {
            switch ($filter) {
                case 1:
                    $products = DB::table('products')
                        ->select('products.*', 'product_images.image_1', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),)
                        ->leftJoin('user_product_logs', 'products.id', '=', 'user_product_logs.product_id')
                        ->join('product_images', 'products.id', '=', 'product_images.product_id')
                        ->groupBy('products.id')
                        ->orderBy('products.title', 'ASC')
                        ->take(10)
                        ->paginate(10);
                    return view('admin.items_list', compact('products'));
                    break;

                case 2:
                    $products = DB::table('products')
                        ->select('products.*', 'product_images.image_1', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),)
                        ->leftJoin('user_product_logs', 'products.id', '=', 'user_product_logs.product_id')
                        ->join('product_images', 'products.id', '=', 'product_images.product_id')
                        ->groupBy('products.id')
                        ->orderBy('products.title', 'DESC')
                        ->take(10)
                        ->paginate(10);
                    return view('admin.items_list', compact('products'));
                    break;

                case 3:
                    $products = DB::table('products')
                        ->select('products.*', 'product_images.image_1', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),)
                        ->leftJoin('user_product_logs', 'products.id', '=', 'user_product_logs.product_id')
                        ->leftjoin('product_images', 'products.id', '=', 'product_images.product_id')
                        ->groupBy('products.id')
                        ->orderBy('total_views', 'DESC')
                        ->take(10)
                        ->paginate(10);
                    return view('admin.items_list', compact('products'));
                    break;

                case 4:
                    $products = DB::table('products')
                        ->select('products.*', 'product_images.image_1', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),)
                        ->leftJoin('user_product_logs', 'products.id', '=', 'user_product_logs.product_id')
                        ->join('product_images', 'products.id', '=', 'product_images.product_id')
                        ->groupBy('products.id')
                        ->orderBy('total_clicks', 'DESC')
                        ->take(10)
                        ->paginate(10);
                    return view('admin.items_list', compact('products'));
                    break;
                default:
                    $admins = DB::table('admins')
                        ->get();
                    $products = DB::table('products')
                        ->select('products.*', 'product_images.image_1', DB::raw('SUM(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),)
                        ->leftJoin('user_product_logs', 'products.id', '=', 'user_product_logs.product_id')
                        ->leftJoin('product_images', 'products.id', '=', 'product_images.product_id')
                        ->join('admins', 'products.created_by', '=', 'admins.id')
                        ->groupBy('products.id')
                        ->orderBy('products.id', 'ASC')
                        ->take(10)
                        ->paginate(10);

                    return view('admin.items_list', compact('products','admins'));
                    break;
            }
        }
    }

    //Get All Brands
    public function getBrands()
    {
        $brands = DB::table('brands')->get();
        $subcategories = DB::table('subcategories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        return view('admin.add_item', compact('brands', 'subcategories', 'ecommerces'));
    }


    //Add product
    public function addProduct()
    {
        $brands = DB::table('brands')->get();
        $subcategories = DB::table('subcategories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        return view('admin.add_item', compact('brands', 'subcategories', 'ecommerces'));
    }

    //get Single product
    public function getProductById($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $ecommerces = DB::table('ecommerces')->get();
        $brands = DB::table('brands')->get();
        $subcategories = DB::table('subcategories')->get();
        $images = DB::table('product_images')->get();
        return view('admin.single_product', compact('product', 'ecommerces', 'subcategories', 'brands', 'images'));
    }

    //delete product
    public function deleteProduct($id)
    {
        $product = DB::table('products')->where('id', $id)->delete();
        return back()->with('product_deleted', 'Product has been deleted successfully!');
    }

    //update product
    public function editProduct($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $ecommerces = DB::table('ecommerces')->get();
        $subcategories = DB::table('subcategories')->get();
        $brands = DB::table('brands')->get();
        $images = DB::table('product_images')->get();
        return view('admin.edit_item', compact('product', 'ecommerces', 'subcategories', 'brands', 'images'));
    }

    public function updateProduct(Request $request)
    {
        $admin_id = DB::table('admins')->where('username', session('user'))
            ->value('id');
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'subcategory_id' => 'required',
            'brand_id' => 'required',
            'ecommerce_id' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'affiliate_link' => 'required|url',
            'image1' => 'image|mimes:jpg,png,jpeg',
            'image2' => 'image|mimes:jpg,png,jpeg',
            'image3' => 'image|mimes:jpg,png,jpeg',
            'image4' => 'image|mimes:jpg,png,jpeg',
        ]);

        if (isset($request->stock_status)) {
            $flge = 1;
        } else {
            $flge = 0;
        }

        $request->id;
        $title = $request->title;
        $stok_status = $flge;
        $short_description = $request->short_description;
        $description = $request->description;
        $subcategory_id = $request->subcategory_id;
        $brand_id = $request->brand_id;
        $ecommerce_id = $request->ecommerce_id;
        $regular_price = $request->regular_price;
        $sale_price = $request->sale_price;
        $affiliate_link = $request->affiliate_link;


        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');
        $image4 = $request->file('image4');
        if ($image1 != null) {
            $imageName1 = 'assets/images/product/' . $title . time() . '/' . $title . '1.' . $image1->extension();
            $image1->move("assets/images/product/$title" . time(), $imageName1);
            DB::table('product_images')->where('product_id', $request->id)->update([
                'image_1' => $imageName1
            ]);
        }
        if ($image2 != null) {
            $imageName2 = 'assets/images/product/' . $title . time() . '/' . $title . '2.' . $image2->extension();
            $image2->move("assets/images/product/$title" . time(), $imageName2);
            DB::table('product_images')->where('product_id', $request->id)->update([
                'image_2' => $imageName2
            ]);
        }
        if ($image3 != null) {
            $imageName3 = 'assets/images/product/' . $title . time() . '/' . $title . '3.' . $image3->extension();
            $image3->move("assets/images/product/$title" . time(), $imageName3);
            DB::table('product_images')->where('product_id', $request->id)->update([
                'image_3' => $imageName3
            ]);
        }
        if ($image4 != null) {
            $imageName4 = 'assets/images/product/' . $title . time() . '/' . $title . '4.' . $image4->extension();
            $image4->move("assets/images/product/$title" . time(), $imageName4);
            DB::table('product_images')->where('product_id', $request->id)->update([
                'image_4' => $imageName4
            ]);
        }

        $product = Product::find($request->id);
        $product->title = $title;
        $product->stock_status = $stok_status;
        $product->short_description = $short_description;
        $product->description = $description;
        $product->subcategory_id = $subcategory_id;
        $product->brand_id = $brand_id;
        $product->ecommerce_id = $ecommerce_id;
        $product->regular_price = $regular_price;
        $product->sale_price = $sale_price;
        $product->affiliate_link = $affiliate_link;
        $product->created_at = Carbon::now();
        $product->updated_at = now();
        $product->updated_by = $admin_id;
        $product->save();
        // $product->images()->save($product_images);

        return back()->with('product_updated', 'Product has been updated successfully!');
    }

    public function addProductSubmit(Request $request)
    {
        $admin_id = DB::table('admins')->where('username', session('user'))
            ->value('id');


        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'subcategory_id' => 'required',
            'brand_id' => 'required',
            'ecommerce_id' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'affiliate_link' => 'required|url',
            'image1' => 'required|image|mimes:jpg,png,jpeg',
            'image2' => 'required|image|mimes:jpg,png,jpeg',
            'image3' => 'required|image|mimes:jpg,png,jpeg',
            'image4' => 'required|image|mimes:jpg,png,jpeg',


        ]);

        $title = $request->title;
        $short_description = $request->short_description;
        $description = $request->description;
        $subcategory_id = $request->subcategory_id;
        $brand_id = $request->brand_id;
        $ecommerce_id = $request->ecommerce_id;
        $regular_price = $request->regular_price;
        $sale_price = $request->sale_price;
        $affiliate_link = $request->affiliate_link;


        $image1 = $request->file('image1');
        $imageName1 = 'assets/images/product/' . $title . time() . '/' . $title . '1.' . $image1->extension();
        $image1->move("assets/images/product/$title" . time(), $imageName1);

        $image2 = $request->file('image2');
        $imageName2 = 'assets/images/product/' . $title . time() . '/' . $title . '2.' . $image2->extension();
        $image2->move("assets/images/product/$title" . time(), $imageName2);

        $image3 = $request->file('image3');
        $imageName3 = 'assets/images/product/' . $title . time() . '/' . $title . '3.' . $image3->extension();
        $image3->move("assets/images/product/$title" . time(), $imageName3);

        $image4 = $request->file('image4');
        $imageName4 = 'assets/images/product/' . $title . time() . '/' . $title . '4.' . $image4->extension();
        $image4->move("assets/images/product/$title" . time(), $imageName4);

        $product_images = new Product_images();

        $product_images->image_1 = $imageName1;
        $product_images->image_2 = $imageName2;
        $product_images->image_3 = $imageName3;
        $product_images->image_4 = $imageName4;

        $product = new Product();
        $product->title = $title;
        $product->short_description = $short_description;
        $product->description = $description;
        $product->subcategory_id = $subcategory_id;
        $product->brand_id = $brand_id;
        $product->ecommerce_id = $ecommerce_id;
        $product->regular_price = $regular_price;
        $product->sale_price = $sale_price;
        $product->affiliate_link = $affiliate_link;
        $product->created_at = Carbon::now();
        $product->updated_at = now();
        $product->created_by = $admin_id;
        $product->updated_by = $admin_id;
        $product->save();
        $product->images()->save($product_images);
        return back()->with('added', 'Success');
    }
}
