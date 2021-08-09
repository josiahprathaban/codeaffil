<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ecommerce;

class EcommerceController extends Controller
{
    //add e-commerce 
    public function addEcommerceSubmit(Request $request)
    {
        $validated = $request->validate([
            'ecommerce_name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $id = $request->ecommerce_id;
        $name = $request->ecommerce_name;
        $image = $request->file('image');
        $imageName = "assets/images/ecommerce/" . $name . '.' . $image->extension();
        $image->move("assets/images/ecommerce", $imageName);
        // $image->move("assets/images/subcategory", "{$name}.{$imageName}");

        $ecommerce = new Ecommerce();
        $ecommerce->id = $id;
        $ecommerce->name = $name;
        $ecommerce->logo = $imageName;
        $ecommerce->save();
        return back()->with('ec_added', 'Ecommerce has been added successfully!');
    }

    //update
    public function updateEcommerce(Request $request)
    {
        $validated = $request->validate([
            'ecommerce_name' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg',
        ]);

        $name = $request->ecommerce_name;
        $image = $request->file('image');

        if ($image == null) {
            $ecommerce = Ecommerce::find($request->ecommerce_id);
            $ecommerce->name = $name;
            $ecommerce->save();
            return back()->with('sc_updated', 'Subcategories has been updated successfully!');
        } else {
            $imageName = "assets/images/ecommerce/" . $name . '.' . $image->extension();
            $image->move("assets/images/ecommerce", $imageName);


            $ecommerce = Ecommerce::find($request->ecommerce_id);
            $ecommerce->name = $name;
            $ecommerce->logo = $imageName;
            $ecommerce->save();
            return back()->with('ec_updated', 'Ecommerce has been updated successfully!');
        }
    }

    //Get All ecommerces
    public function getEcommerces()
    {
       
        $ecommerces = DB::table('ecommerces')
        ->select('ecommerces.*', DB::raw('count(products.id) as total_products'), DB::raw('sum(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),)
        ->leftJoin('products', 'products.ecommerce_id', '=', 'ecommerces.id')
        ->leftJoin('user_product_logs', 'user_product_logs.product_id', '=', 'products.id')
        ->groupBy('ecommerces.id')
        ->orderBy('ecommerces.id')
        ->paginate(10);
        
        return view('admin.ecommerce', compact('ecommerces'));
    }
}
