@extends('layouts.app')
@section('content')
    <x-page-indicator page="Categories" />
    <div class="container mx-auto px-4 mt-16 xl:px-32  xl:mt-28">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-5 gap-y-6 xl:gap-x-20 xl:gap-y-12 mt-10">
            @if(!empty($category->products) && $category->products->count())
            @foreach($category->products as $product)
            <form action="{{ route('shopping-cart-store') }}" method="POST">
            {{ csrf_field() }}
                <x-grid_product imgSrc="{{ asset('img/'.$product->photoURL) }}" item="{{ $product->title }}" price="$ {{ $product->price }}" delPrice="$ {{ $product->reducedPrice }}"/>
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->title }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
             </form>
            @endforeach
        @else

            <h1 class="text-red-500">There are no product for category: {{$category->name}}</h1>
        @endif
        </div>
    </div>
@endsection
