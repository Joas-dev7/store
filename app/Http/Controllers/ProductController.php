<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Page d'accueill
    public function index ()
    {
        $categories = Category::all();

        $products = Product::orderBy('id', 'desc')->paginate(8);

        // dd($categories);
        return view('product.products', compact('categories','products'));
    }

    //Affichage d un produit
    public function show (Product $product)
    {
        $products = Product::where('category_id', $product->category_id)
                            ->inRandomOrder()
                            ->limit(5)
                            ->get();
        return view('product.show', compact('product', 'products'));
    }

    //Afficher les produits par category
    public function productByCategory ($id) 
    {
        $categories = Category::all();

        $products = Product::where('category_id', $id)
                            ->orderBy('id', 'desc')->paginate(4);

        // dd($categories);
        return view('product.products', compact('categories','products'));
    }
}
