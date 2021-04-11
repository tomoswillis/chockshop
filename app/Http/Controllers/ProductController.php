<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Inertia::render('Products', [
            'product' => Product::with('categories:id,name')
                ->get()
        ]);
    }
}
