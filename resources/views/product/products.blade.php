@extends('layouts.shop')

@section('content')

    <x-category-list/>
    {{-- <x-product-list :products="$products"/> --}}

    @php
        /*
    <ul class= "flex flex-1 gap-4">
        @foreach ($categories as $category)
            <li class="bg-slate-300 p-1 rounded-full">
                <a href="{{route("product.category", $category->id)}}">{{$category->name}}</a>
            </li>
        @endforeach
    </ul>

    <x-product-card :products="$products" :favorites="$favorites"/>
    {{-- Lien de Pagination --}}
    {{ $products->links() }}

    */
    @endphp

@endsection

