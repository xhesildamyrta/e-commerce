@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 xl:px-32">
    <h1 class="lg:text-lg">Hekto Demo</h1>
    <p class="text-gray-400">Cart/Information/Shipping/Payment</p>
    <div class="flex flex-col lg:flex-row gap-x-10 my-4 md:my-14">
        <div class="section1 bg-slate-100  lg:w-2/3">
            <div class="px-5 py-5 md:py-10">
                <h1>Shipping Address</h1>
                <div class="flex flex-col gap-y-2 md:gap-y-6 mt-4 md:mt-10">
                    <div class="flex flex-col sm:flex-row gap-y-2 gap-x-16">
                        <div class="flex flex-col gap-y-2  ">
                            <input type="text" class="bg-slate-100 focus:outline-none" placeholder="FirstName(optional)">
                            <hr class="text-gray-400">
                        </div>
                        <div class="flex flex-col gap-y-2 ">
                            <input type="text" class="bg-slate-100 focus:outline-none" placeholder="LastName(optional)">
                            <hr class="text-gray-400">
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <input type="text" class="bg-slate-100 focus:outline-none" placeholder="Address">
                        <hr class="text-gray-400">
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <input type="text" class="bg-slate-100 focus:outline-none" placeholder="Apartment,Suit etc(optional)">
                        <hr class="text-gray-400">
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <input type="text" class="bg-slate-100 focus:outline-none"  placeholder="City">
                        <hr class="text-gray-400">
                    </div>
                    <div class="flex flex-col sm:flex-row gap-y-2 gap-x-16">
                        <div class="flex flex-col gap-y-2">
                            <input type="text" class="bg-slate-100 focus:outline-none" placeholder="Bangladesh">
                            <hr class="text-gray-400">
                        </div>
                        <div class="flex flex-col gap-y-2 ">
                            <input type="text" class="bg-slate-100  focus:outline-none" placeholder="Postal Code" class="">
                            <hr class="text-gray-400">
                        </div>
                    </div>
                    <div class="bg-pink-600 py-1 md:py-2 px-1 md:px-2 w-40 text-center text-white font-semibold mt-5  md:mt-20 rounded">
                        <a href="">
                            <button type="submit" class="">Continue Shipping</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section2 flex flex-row lg:flex-col  justify-between lg:w-1/3 mt-10 lg:mt-0">
            <div class="flex flex-col gap-y-5 ">
                @for ($i = 0 ; $i < 2 ; $i++)
                <div class="flex justify-between place-items-center">
                    <div class="flex">
                        <div class="w-28 h-28">
                            <img src="img/lr3.png" class="w-24 h-20">
                        </div>
                        <div class="">
                            <h1 class="text-lg">Basic Corean Style Bag</h1>
                            <p class="text-gray-400">Color: Brown</p>
                            <p class="text-gray-400">Size: XL</p>
                        </div>
                    </div>
                    <div class="">
                        <h1 class="text-lg">$ 32</h1>
                    </div>
                </div>
                <div>
                    <hr class="text-gray-400">
                </div>
                @endfor
            </div>

            <div class="section2sub1 flex flex-col gap-y-4 px-5 py-8 rounded bg-slate-100  ">
                <div>
                    <div class="flex justify-between">
                        <h1>Totals</h1>
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
                        <button type="submit" class="">Proceed To Checkout</button>
                    </a>
                </div> 
            </div>
        </div><!--end section 2-->
    </div><!--wrapper end-->
</div>
@endsection