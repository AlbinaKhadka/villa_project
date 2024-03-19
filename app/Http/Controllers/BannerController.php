<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
    public function showBanners(){
        $banners = Banner::all();
        // dd($banners);
        return view('Frontend.index', compact('banners'));
    }

}

