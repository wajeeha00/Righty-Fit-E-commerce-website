<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    public function show($name)
    {
        $products = Product::where('category', $name)->get();

        return view('categories.show', [
            'products' => $products,
            'category' => $name,
        ]);
    }
}


