<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Item;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('categories/index', [
            'title' => $category->category_name,
            'category' => $category,
            'items' => Item::where('category_id', $category->id)->get()
        ]);
    }
}
