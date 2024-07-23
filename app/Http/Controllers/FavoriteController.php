<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function edit(Product $product){
    
        // dd($product);
        //query database on a favorite record
        $existFavorite = Favorite::where('user_id', auth()->user()->id)
                                ->where('product_id', $product->id)
                                ->first();
        // dd($existFavorite);
        
        //if favorite already exists we redirect, otherwise we create it
        if(isset($existFavorite))
        {
            return back();
        }else
        {
            Favorite::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product->id,
                'isFavorite' => '1',
            ]);
            return back();
        }
        
    }

    public function delete(Favorite $favorite)
    {
        $favorite->delete();
        return back();
    }

    //fonction non terminée. Jointure de tables???
    public function index(){
        $favorites = Favorite::where('user_id', auth()->user()->id)
                            ->get();
        
        $existFavorite = App\Models\Favorite::where('user_id', auth()->user()->id)
        ->where('product_id', $product->id)
        ->first();

        return view('favorite.all', compact('favorites', 'existFavorite'));
    }
}
