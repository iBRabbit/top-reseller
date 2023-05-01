<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Item;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('brands/index', [
            'title' => 'Top 5 brands',
            'brands' => Brand::where('top5_flag', true)->get()
        ]);
    }

    public function show(Brand $brand) {
        return view('brands/brand', [
            'title' => $brand->brand_name,
            'brand' => $brand,
            'items' => Item::where('brand_id', $brand->id)->get()
        ]);
    }
}
