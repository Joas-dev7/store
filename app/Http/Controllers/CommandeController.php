<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Commande;
use Stripe\StripeClient;
use App\Models\CommandeItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CommandeController extends Controller
{
    //


    public function index(){

        $commandes = Commande::where('user_id', auth()->user()->id)
                                ->orderBy('id', 'desc')
                                ->get() ; 


        return view('commande.lister' , compact('commandes')); 

    }
        
    /**
     *  Création de la commande 
     *  et ajout des éléments du panier dans commande Items 
     * 
     */

    public function create(){

        // lecture du panier
        $paniers = Panier::where( 'user_id' , auth()->user()->id)->get() ; 

        if(count($paniers) == 0 ){ return 'vide' ; }

        // création de la commande
        $commande = Commande::create([  'user_id' => auth()->user()->id,
                                        'numero'=> 0,
                                        'total' => 0 ]) ;


        $total = 0 ;
        foreach($paniers as $panier){

            $commandeId = $commande->id  ;       // identifiant de la commande
            $productId  = $panier->product_id ;  // identifiant du produit
            $quantite   = $panier->quantite ;       // nombre de  produit
            $price      = $panier->product->price  ; // prix du produit
            $total      +=  $price * $quantite ; // ->  $total  = $total + $price * $quantite

            // ajout dans la table Commande item
            CommandeItem::create([ 'commande_id' => $commandeId,
                                'product_id' => $productId ,
                                'quantite' => $quantite,
                                'price' => $price 
                            ]) ;
            

        }
        

        // mise à jour du total de la commande
        $commande->update(['numero'=>9999 ,'total' => $total]) ;
        $commande->save() ; 

        // je vide le panier 
        Panier::where( 'user_id' , auth()->user()->id)->delete() ;
        
        $urlPaiement = $this->stripeCheckout($total, $commande->id);

        return redirect($urlPaiement) ; 


    }


    public function stripeCheckout($total, $commandeId)
    {
        // parametrage de l'api 
        $stripe = new StripeClient(env('STRIPE_SECRET'));
        
        // url de confirmation de paiement
        $redirectUrl = route('commande.success') . '?session_id={CHECKOUT_SESSION_ID}';
        
       //création de la session de paiment stripe
        $response =  $stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,
            'payment_method_types' => ['link', 'card'],
            'customer_email' => auth()->user()->email,
            'client_reference_id' => $commandeId,
            'line_items' => [
                [
                    'price_data'  => [
                        'product_data' => [
                            'name' => $commandeId,
                        ],
                        'unit_amount'  => 100 * $total,
                        'currency'     => 'EUR',
                    ],
                    'quantity'    => 1
                ],
            ],
            'mode' => 'payment',
            'allow_promotion_codes' => false
        ]);

        // génération de l'url de paiement
        return $response['url'];
    }

    //controle et validation de la commande
    public function success(Request $request) {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $session = $stripe->checkout->sessions->retrieve($request->session_id);
        // dd($session);
        
        //si la commande a bien ete payée
        if($session->status == "complete"){
            //on recherche le client
            $commande = Commande::find($session->client_reference_id);
            //on met a jour le numero de commande du client
            $commande->update(['numero' => $session->payment_intent]);
            $commande->save();
            return view('commande.lister');
        }

    }
    
    public function webhook()  {
        return 'ok';
    }


}