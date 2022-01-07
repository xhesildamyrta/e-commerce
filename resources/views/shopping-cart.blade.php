@extends('layouts.app')
@section('content')
<x-page-indicator page="Shopping Cart" />
<div class="container mx-auto px-4 xl:px-32 mt-8">
    @if(session()->has('success_message'))
    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert" id="alert">
        {{ session()->get('success_message') }}
    </div>
    @endif
    <div class="flex flex-col lg:flex-row gap-x-10 my-24">
        <div class="section1 flex flex-col gap-y-5 lg:w-3/4">
            @if(Cart::count()>0)
            @foreach(Cart::content() as $item)
            @php
            $product_id = (int) $item->id;
            //dd($product_id);
            $categories = \App\Models\Product::with('category')->where('id', $item->model->id)->get();
            @endphp
            <div class="flex justify-between place-items-center">
                <div class="flex space-x-10">
                    <div class="relative">
                        <img src="{{ asset('img/'.$item->model->photoURL) }}" class="w-28 h-28">
                        <form action="{{ route('shopping-cart-destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="absolute -mt-32 ml-28">
                                <button class="fas fa-times-circle hover:text-red-500"></button>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <h1 class="text-lg">{{ $item->model->title }}</h1>
                        <p class="text-gray-400">Color: {{ $item->model->color }}</p>
                        @foreach($categories as $category)
                        <p class="text-gray-400">Category: {{ $category->category->name  }}</p>
                        @endforeach
                        <p class="text-gray-400">Rating: {{ $item->model->rating }}</p>
                    </div>
                </div>
                <div class="">
                    <h1 class="">$ {{ $item->model->price }}</h1>
                    <input type="hidden" name="price" value="{{ $item->model->price }}">
                </div>
                <div class="custom-number-input h-10 w-16 lg:w-32">
                    <div class="flex flex-row h-7 lg:h-10 w-full rounded-lg relative bg-transparent mt-1">
                        <button data-action="decrement" class=" bg-gray-300 text-gray-400 hover:text-gray-700 hover:bg-gray-200 h-full w-20 rounded-l cursor-pointer outline-none">
                            <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <input type="number" class=" focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-400  outline-none" name="custom-input-number" value="1"></input>
                        <button data-action="increment" class="bg-gray-300 text-gray-400 hover:text-gray-700 hover:bg-gray-200 h-full w-20 rounded-r cursor-pointer">
                            <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                    </div>
                </div>
                <div class="">
                    <h1>$ {{$item->model->price * $item->model->qty}}</h1>
                </div>
            </div>
            <div>
                <hr class="text-gray-400">
            </div>
            @endforeach
            @else
            <span class="text-red-500 font-bold text-center">There are no items in shopping cart</span>
            @endif
            <div class="flex justify-between">
                <div class="border-2 border-pink-600 hover:bg-pink-600 py-2 px-7 text-center text-white font-semibold  mt-6 rounded">
                    <a href="{{ route('all-products')}}">
                        <button type="submit" class="text-pink-600 hover:text-white">Continue Shopping</button>
                    </a>
                </div>
                <div class="border-2 border-pink-600 hover:bg-pink-600 py-2 px-7 text-center text-white font-semibold  mt-6 rounded">
                    <button type="submit" class="text-pink-600 hover:text-white">Update Cart</button>

                </div>
            </div>
        </div>
        @if( Cart::count()>0)
        <div class="section2   lg:w-1/4">
            <h1 class="section-heading text-lg lg:text-center ">Cart Totals</h1>
            <div class="grid gap-y-4 px-5 py-8 rounded bg-slate-100 mt-8">
                <div>
                    <div class="flex justify-between">
                        <h1>Subtotals</h1>
                        <h1>$ {{Cart::subtotal();}}</h1>
                    </div>
                    <hr class="text-gray-400 mt-2">
                </div>
                <div>
                    <div class="flex justify-between">
                        <h1>Tax</h1>
                        <h1>$ {{Cart::tax();}}</h1>
                    </div>
                    <hr class="text-gray-400 mt-2">
                </div>
                <div>
                    <div class="flex justify-between">
                        <h1>Totals</h1>
                        <h1>$ {{Cart::total();}}</h1>
                    </div>
                    <hr class="text-gray-400 mt-2">
                </div>
                <div class="">
                    <label class="flex place-items-center mt-3">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-green-600 bg-green-600" checked><span class="ml-2 text-gray-700">Shipping & Taxes included</span>
                    </label>
                </div>
                <div class="create-blog-section ">
                    <a href="{{route('checkout')}}">
                        <button type="" class="bg-green-600 py-2 px-7 w-full text-center text-white font-semibold  mt-6 rounded">Checkout</button>
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection