<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\subcategory;

class SubCategoryController extends Controller
{
    public function addSubCategorySubmit(Request $request)
    {
        $validated = $request->validate([
            'subcategory_id' => 'required',
            'subcategory_name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $id = $request->subcategory_id;
        $name = $request->subcategory_name;
        $image = $request->file('image');
        $imageName = "assets/images/subcategory/" . $name . '.' . $image->extension();
        $image->move("assets/images/subcategory", $imageName);

        $subcategory = new SubCategory();
        $subcategory->category_id = $id;
        $subcategory->name = $name;
        $subcategory->image = $imageName;
        $subcategory->save();

        $category_id = DB::table('subcategories')->where('name',$name)->value('category_id');
        DB::table('categories')
                ->where('id', $category_id)
                ->update(['no_of_sub' => DB::raw('no_of_sub + 1')]);


        return back()->with('sc_added', 'Subcategories has been added successfully!');
    }

    public function updateSubCategory(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg',
        ]);

        $id = $request->subcategory_id;
        $category_id = $request->category_id;
        $name = $request->subcategory_name;
        $image = $request->file('image');

        if ($image == null) {
            $subcategory = subcategory::find($request->subcategory_id);
            $subcategory->name = $name;
            $subcategory->category_id = $category_id;
            $subcategory->save();
            return back()->with('sc_updated', 'Subcategories has been updated successfully!');
        } else {
            $imageName = "assets/images/subcategory/" . $name . '.' . $image->extension();
            $image->move("assets/images/subcategory", $imageName);


            $subcategory = subcategory::find($request->subcategory_id);
            $subcategory->name = $name;
            $subcategory->category_id = $category_id;
            $subcategory->image = $imageName;
            $subcategory->save();
            return back()->with('sc_updated', 'Subcategories has been updated successfully!');
        }
    }

    //Get All subcategories
    public function getSubCategories(Request $request)
    {
        $search = $request->search;

        if (isset($search)) {
            $subcategories = DB::table('subcategories')
                ->select('subcategories.*', 'categories.name as category_name', DB::raw('count(products.id) as total_products'))
                ->leftJoin('products', 'products.subcategory_id', '=', 'subcategories.id')
                ->join('categories', 'categories.id', '=', 'subcategories.category_id')
                ->groupBy('subcategories.id')
                ->orderBy('subcategories.id')
                ->where('subcategories.name', 'LIKE', "%{$search}%")
                ->paginate(10);
            $categories = DB::table('categories')->get();
            return view('admin.subcategories', compact('subcategories', 'categories', 'search'));
        } else {
            $subcategories = DB::table('subcategories')
                ->select('subcategories.*', 'categories.name as category_name', DB::raw('count(products.id) as total_products'))
                ->leftJoin('products', 'products.subcategory_id', '=', 'subcategories.id')
                ->join('categories', 'categories.id', '=', 'subcategories.category_id')
                ->groupBy('subcategories.id')
                ->orderBy('subcategories.id')
                ->paginate(10);
            $categories = DB::table('categories')->get();
            return view('admin.subcategories', compact('subcategories', 'categories'));
        }
    }
}
