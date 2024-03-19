<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\SettingsManager;
use App\Models\Banner;
use App\Models\PropertyTypes;
use App\Models\Property;

class IndexController extends Controller
{
    public function index(Request $request) {
        $banners = Banner::all();
        $propertyTypes = PropertyTypes::with('properties')->get();
        $propertyTypeId = $request->query('propertytype_id');


        if ($propertyTypeId) {
            $properties = Property::where('id', $propertyTypeId)->get();
        } else {
            $properties = Property::all();}
            // dd($propertyTypes);
        return view('Frontend.index',compact('banners','propertyTypes'));
    }

}
