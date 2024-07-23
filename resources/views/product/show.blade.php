@extends('layouts.store')

@section('content')

    <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
        <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">

          <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
            <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
              <img src="https://tailwindui.com/img/ecommerce-images/product-quick-preview-02-detail.jpg" alt="Two each of gray, white, and black shirts arranged on table." class="object-cover object-center">
            </div>
            <div class="sm:col-span-8 lg:col-span-7">
              <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">{{$product->name}}</h2>
              
              <p class="text-2xl text-gray-900">{{$product->price}}</p>
        <section aria-labelledby="options-heading" class="mt-10">
            <h3 id="options-heading" class="sr-only">Product options</h3>
            
            <form>
                <fieldset aria-label="Choose a color">
                    <legend class="text-sm font-medium text-gray-900">Description</legend>
                    <p>
                      {{$product->description}}
                    </p>
                  </fieldset>
                  
                  @php
                    //la requete demande si un utilisateur qui est connecte a un produit en favoris
                    $existFavorite = App\Models\Favorite::where('user_id', auth()->user()->id)
                                ->where('product_id', $product->id)
                                ->first();
                    // dd($existFavorite);
        
                    //if favorite already exists we redirect, otherwise we create it
                    if(isset($existFavorite))
                    {
                      @endphp
                      <a href="{{route('favorite.delete', $existFavorite)}}" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete from favorites</a>
                      @php
                    }else
                    {
                      @endphp
                      <a href="{{route('favorite.edit', $product)}}" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-green-600 px-8 py-3 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Add to favorites</a>
                      @php
                    }

                  @endphp
                  
                  
                  
                  <a href="{{route('panier.ajouter', $product)}}" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</a>
                </form>
              </section>
            </div>
          </div>
        </div>
      </div>
      <x-product-card :products="$products" :favorites="$favorites"/>


@endsection