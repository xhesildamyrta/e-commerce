@extends('layouts.app')
@section('content')
<x-page-indicator page="Shopping Cart"/>
<div class="container mx-auto px-4 xl:px-32">
    <div class="flex flex-col lg:flex-row gap-x-10 my-24">
        <div class="section1 flex flex-col gap-y-5 lg:w-3/4">
            @for ($i = 0 ; $i < 3 ; $i++)
            <div class="flex justify-between place-items-center">
                <div class="flex space-x-10">
                    <div class="relative">
                        <img src="img/lr3.png" class="w-28 h-28">
                        <div class="absolute -mt-32 ml-28">
                        <i class="fas fa-times-circle hover:text-red-500"></i>
                        </div>
                    </div>
                    <div class="">
                        <h1 class="text-lg">Basic Corean Style Bag</h1>
                        <p class="text-gray-400">Color: Brown</p>
                        <p class="text-gray-400">Size: XL</p>
                    </div>
                </div>
                <div class="">
                    <h1>$ 32</h1>
                </div>
                <div class="custom-number-input h-10 w-16 lg:w-32">
                    <div class="flex flex-row h-7 lg:h-10 w-full rounded-lg relative bg-transparent mt-1">
                        <button data-action="decrement" class=" bg-gray-300 text-gray-400 hover:text-gray-700 hover:bg-gray-200 h-full w-20 rounded-l cursor-pointer outline-none">
                            <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <input type="number" class=" focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-400  outline-none" name="custom-input-number" value="0"></input>
                        <button data-action="increment" class="bg-gray-300 text-gray-400 hover:text-gray-700 hover:bg-gray-200 h-full w-20 rounded-r cursor-pointer">
                            <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                    </div>
                </div>
                <div class="">
                    <h1>$ 320</h1>
                </div>
            </div>
            <div>
            <hr class="text-gray-400">
            </div>
            @endfor
            <div class="flex justify-between">
                <div class="border-2 border-pink-600 hover:bg-pink-600 py-2 px-7 text-center text-white font-semibold  mt-6 rounded">
                    <a href="">
                        <button type="submit" class="text-pink-600 hover:text-white">Update Cart</button>
                    </a>
                </div>
                <div class="border-2 border-pink-600 hover:bg-pink-600 py-2 px-7 text-center text-white font-semibold  mt-6 rounded">
                    <a href="">
                        <button type="submit" class="text-pink-600 hover:text-white">Clear Cart</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="section2   lg:w-1/4">
            <h1 class="section-heading text-lg lg:text-center ">Cart Totals</h1>
            <div class="grid gap-y-4 px-5 py-8 rounded bg-slate-100 mt-8">
                <div>
                <div class="flex justify-between">
                    <h1>Subtotals</h1>
                    <p>$ 381</p>
                    
                </div>
                <hr class="text-gray-400 mt-2">
                </div>
                
                <div>
                <div class="flex justify-between">
                    <h1>Ttotals</h1>
                    <p>$ 381</p>
                    
                </div>
                <hr class="text-gray-400 mt-2">
                </div>
                <div class="">
                    <label class="flex place-items-center mt-3">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-green-600 bg-green-600" checked><span class="ml-2 text-gray-700">Shipping & Taxes included</span>
                    </label>
                </div>
                <div class="create-blog-section bg-green-600 py-2 px-7 text-center text-white font-semibold  mt-6 rounded">
                    <a href="">
                        <button type="submit" class="">Checkout</button>
                    </a>
                </div>
            </div>
            <div class="">
                <h1 class="section-heading text-lg mt-8 lg:text-center">Calculate Shipping</h1>
                <div class="flex flex-col mt-4 gap-y-4 bg-slate-100 px-5 py-8 rounded">
                    <div class="space-y-2 ">
                        <input type="text" class="text-gray-400 bg-slate-100 focus:outline-none" value="Bangladesh">
                        <hr class="text-gray-400">
                    </div>
                    <div class="space-y-2 ">
                        <input type="text" class="text-gray-400 bg-slate-100 focus:outline-none" value="Bangladesh">
                        <hr class="text-gray-400">
                    </div>
                    <div class="space-y-2 ">
                        <input type="text" class="text-gray-400 bg-slate-100 focus:outline-none" value="Bangladesh">
                        <hr class="text-gray-400">
                    </div>
                    <div class="create-blog-section bg-pink-600 py-2 px-7 text-center text-white font-semibold  mt-6 rounded">
                        <a href="">
                            <button type="submit" class="">Calculate Shipping</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection