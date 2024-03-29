@extends('layouts.app')
@section('content')
<x-page-indicator page="Shop Grid Default"/>
<div class="container mx-auto px-4 xl:px-32">
    @include('filter-partial')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-5 gap-y-6 xl:gap-x-20 xl:gap-y-12 mt-10 lg:mt-36 " id="divForm">
        @if(!empty($products) && $products->count())
            @foreach($products as $product)
            <form action="{{ route('shopping-cart-store') }}" method="POST">
            {{ csrf_field() }}
                <x-grid_product imgSrc="{{ asset('img/'.$product->photoURL) }}" item="{{ $product->title }}" price="$ {{ $product->price }}" delPrice="$ {{ $product->reducedPrice }}"/>
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->title }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
             </form>
            @endforeach
        @else
            <h1 class="text-red-500">There are no products in database</h1>
        @endif
    </div>
  <div class="">
    {{ $products->links() }}
  </div>
    <div class="place-content-center py-3 xl:px-80 pt-11 pb-6 2xl:py-24">
        <img src="img/sponsor.png"  class="w-full">
    </div>
</div>
@endsection