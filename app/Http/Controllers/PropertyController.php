<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyTypes;
use App\Models\Property;


class PropertyController extends Controller
{
    public function show($id)
    {
        $properties = Property::all();
        return view('property-details', compact('properties'));
    }

    public function showByType($type)
    {
        $propertyTypes = Propertytypes::with('properties')->get();
        return view('Frontend.property-details', compact('propertyTypes'));
    }
    public function showBySlug($slug)
{
    $propertyType = PropertyType::where('slug', $slug)->firstOrFail();
    return view('Frontend.property-details', compact('propertyTypes'));
}

    }


