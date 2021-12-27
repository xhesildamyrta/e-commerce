@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 xl:px-32">
    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
        <p class="font-bold">All Search Results</p>
        <p class="text-sm">{{ $products->total() . ' result(s) found:' }}</p>
    </div>
    <div class="mt-4 grid grid-cols-1 space-y-3 xl:space-y-8">
        @foreach ($products  as $product )
            <div class="sm:flex sm:space-x-8 mt-10">
                <img src="{{asset('img/'.$product->photoURL)}}"  alt="living-room.png" class="w-full sm:w-60 2xl:w-72 2xl:h-56 object-cover object-center">
                <div class="flex flex-col py-2 xl:py-6">
                    <div class="flex place-items-center space-x-5">
                        <h1 class="prod-title item-name text-lg 2xl:text-xl">{{ $product->title }}</h1>
                        <div class="flex space-x-1.5">
                            <i class="fas fa-circle text-orange-600 "style="font-size: 12px;"></i>
                            <i class="fas fa-circle text-pink-600" style="font-size: 12px;"></i>
                            <i class="fas fa-circle text-blue-800" style="font-size: 12px;"></i>
                        </div>
                    </div>
                    <div class="flex place-items-center mt-1 2xl:mt-3.5 space-x-2.5">
                        <h2 class="item-price">$ {{ $product->price }}</h2>
                        <p class="item-del-price text-pink-600"><del>$ {{ $product->reducedPrice }}</del></p>
                        <div class="pl-5">
                            <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>
                            <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>     
                            <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>
                            <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>           
                            <i class="fas fa-star w-4 h-4 text-gray-500 "></i>           
                        </div>
                    </div>
                    <div class="block pt-1 2xl:pt-2.5 2xl:w-9/12">
                        <p class="item-desc xl:text-lg text-gray-500">{{ $product->description }}</p>
                    </div>
                    <div class="flex pt-3 space-x-8 2xl:pt-8 ">
                        <i class="fas fa-shopping-cart two rounded-full hover:bg-gray-300 "></i>
                        <i class="far fa-heart two rounded-full hover:bg-gray-300"></i>
                        <i class="fas fa-search-plus rounded-full hover:bg-gray-300"></i>
                    </div>
                </div> 
            </div>
        @endforeach
    </div>
    <div class="flex">
        {{ $products->appends(request()->input())->links() }}
    </div>
</div>
@endsection