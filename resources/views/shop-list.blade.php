@extends('layouts.app')
@section('content')
<x-page-indicator page="Shop List"/>
<div class="container mx-auto px-4 xl:px-32">
@include('filter-partial')
  <div class="mt-4 2xl:mt-24 grid grid-cols-1 gap-y-3 xl:gap-y-8" id="divForm">
    @foreach ($products as $product)
      <x-product_list imgSrc="{{asset('img/'.$product->photoURL)}}" item="{{ $product->title }}" price="$ {{ $product->price }}" delPrice="$ {{ $product->reducedPrice }}" description="{{ $product->description }}"/>
    @endforeach
  </div>
  <div class="">
    {{ $products->links() }}
  </div>
  <div class="place-content-center py-3 pt-11 pb-6 2xl:pt-28 2xl:pb-20 ">
    <img src="img/sponsor.png"  class="w-full">
  </div>
</div>
@endsection