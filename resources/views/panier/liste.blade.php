liste panier
@extends('layouts.store')
<ul class="divide-y divide-gray-100">

@section('content')
@php
    $total = 0;
@endphp

    @forelse ($paniers as $panier)
        @php
            $total += $panier->product->price * $panier->quantite;
        @endphp
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img src="" alt="" class="h-12 w-12 flex-none rounded-full bg-gray50">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900"> {{$panier->product->name}}</p>
                </div>
            </div>

            <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 text-gray-500"> {{$panier->product->price}} x {{$panier->quantite}}</p>
                <p class="text-sm leading-6 text-gray-500"> <a href="{{route('panier.moins',$panier)}}">-</a>  <a href="{{route('panier.ajouter',$panier->product)}}">+</a> </p>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-800"> {{ $panier->product->price * $panier->quantite}} </p>
                <p class="text-sm leading-6 text-gray-800"><a href="{{route('panier.remove',$panier)}}"> supp </a></p>
            </div>
        </li> 
        
        @empty
        Panier vide...
        @endforelse
        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
            <p class="text-sm leading-6 text-gray-900">Total: {{ $total }}</p>
            <a href="" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Commander</a>
        </div>
    </ul> 

@endsection
