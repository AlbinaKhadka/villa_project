<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertytypeController extends Controller
{
    public function showTabs()
    {

        $propertyTypes = PropertyType::all();


        return view('index', compact('propertyTypes'));
    }

}
