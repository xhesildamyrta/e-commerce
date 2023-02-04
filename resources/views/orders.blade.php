@extends('layouts.app')
@section('content')
    <div class="shop-list w-full">
        <div class="container mx-auto py-6 2xl:py-20 px-4 xl:px-32">
            <h1 class="indicator-title text-xl xl:text-4xl ">Hello {{ auth()->user()->name }} Here are your orders</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 mt-16 xl:px-32  xl:mt-28">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-5 gap-y-6 xl:gap-x-20 xl:gap-y-12 mt-10">
            @foreach ($orders as $product)
            <form action="{{ route('shopping-cart-store') }}" method="POST">
                {{ csrf_field() }}
                    <x-grid_product imgSrc="{{ asset('img/'.$product->photoURL) }}" item="{{ $product->title }}" price="$ {{ $product->price }}" delPrice="$ {{ $product->reducedPrice }}"/>
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->title }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                 </form>
            @endforeach
        </div>
    </div>
@endsection
