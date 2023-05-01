<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
}
