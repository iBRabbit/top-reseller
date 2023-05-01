<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Item;

class ItemController extends Controller
{
    public function show(Item $item)
    {
        return view('item/index', [
            'title' => $item->item_name,
            'item' => $item
        ]);
    }

    public function showByCategory(Category $category) {
        return view('categories/index', [
            'title' => $category->category_name,
            'category' => $category,
            'items' => Item::where('category_id', $category->id)->get()
        ]);
    }
}
