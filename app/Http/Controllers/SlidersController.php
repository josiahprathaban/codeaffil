<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;

class SlidersController extends Controller
{
    //get all sliders
    public function Sliders()
    {
        $sliders = DB::table('sliders')->paginate(6);
        return view('admin.sliders', compact('sliders'));
    }

    //add slider
    public function addSlider(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $description = $request->description;
        $image = $request->file('image');
        $imageName = "assets/images/banner-image/banner_" . time() . '.' . $image->extension();
        $image->move("assets/images/banner-image", $imageName);

        $sliders = new Slider();
        $sliders->description = $description;
        $sliders->image = $imageName;
        $sliders->save();
        return back()->with('sl_added', 'Slider has been added successfully!');
    }

    //update slider 
    public function updateSlider(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $id = $request->id;
        $description = $request->description;
        $image = $request->file('image');
        $imageName = "assets/images/banner-image/banner_" . time() . '.' . $image->extension();
        $image->move("assets/images/banner-image", $imageName);

        $sliders = Slider::find($id);
        $sliders->description = $description;
        $sliders->image = $imageName;
        $sliders->save();
        return back()->with('sl_updated', 'Slider has been added successfully!');
    }
}
