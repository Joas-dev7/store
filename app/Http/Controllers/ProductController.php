<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Page d'accueill
    public function index ()
    {
        $categories = Category::all();

        $products = Product::orderBy('id', 'desc')->paginate(8);

        $favorites = Favorite::where('user_id', auth()->user()->id)
        ->get();
        // dd($categories);
        return view('product.products', compact('categories','products', 'favorites'));
    }

    //Affichage d un produit
    public function show (Product $product)
    {
        $favorites = Favorite::where('user_id', auth()->user()->id)
        ->get();

        $products = Product::where('category_id', $product->category_id)
                            ->inRandomOrder()
                            ->limit(5)
                            ->get();
        return view('product.show', compact('product', 'products', 'favorites'));
    }

    //Afficher les produits par category
    public function productByCategory ($id) 
    {
        $categories = Category::all();

        $products = Product::where('category_id', $id)
                            ->orderBy('id', 'desc')->paginate(4);
        $favorites = Favorite::where('user_id', auth()->user()->id)
        ->get();
        // dd($categories);
        return view('product.products', compact('categories','products', 'favorites'));
    }
}
