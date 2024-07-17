<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Product;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index()
    {
        $paniers = Panier::where('user_id', auth()->user()->id)->get();
        
        // dd($paniers);

        return view('panier.liste', compact('paniers'));
    }

    public function ajouter(Product $product)
    {
        
        //Retrieve data product on database - If product exist we add +1 to quantity - otherwise we create a basket
        $existProduct = Panier::where('user_id', '=', auth()->user()->id)
        ->where('product_id', '=', $product->id)
        ->first();
        
        // dd($existProduct);
        
        if(isset($existProduct)){
            $existProduct->quantite = $existProduct->quantite+1;
            $existProduct->save();
                }else{
                    Panier::create([
                        'user_id' => auth()->user()->id,
                        'product_id' => $product->id
                    ]);
                }
                
                return redirect()->route('panier.lister');
    }

    public function commander()
    {
        return 'commander';
    }
    //supprime un element du panier
    public function remove(Panier $panier)
    {
        $panier->delete();
        return back();
    }
    //retire un element du panier
    public function moins(Panier $panier)
    {
        if($panier->quantite == 1){
            $panier->delete();
        }else{
            $panier->quantite -= 1;
            $panier->save();
        }
        return back();
    }
}
