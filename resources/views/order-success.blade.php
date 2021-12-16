@extends('layouts.app')
@section('content')
<x-page-indicator page="Order Completed"/>
<div class="container grid mx-auto px-4 xl:px-32 place-content-center">
<img src="img/success.png" class="pl-8 pt-4">
    <div class="place-content-center" style="border-left: dotted; border-bottom: dotted;">
        <img src="img/success.png" class="place-content-center">
        <h1 class="mt-7 text-4xl text-center">Your Order Is Completed!</h1>
        <p class="mt-7 font-semibold text-center px-72" style="color: #8D92A7;">Thank you for your order! Your order is being processed and will be completed within 3-6 hours.
             You will receive an email confirmation when your order is completed.
        </p>
        <div class="object-center">
        <button class="addCart py-2.5 px-3 text-white  mt-3 rounded-sm">Continue Shopping</button>
        </div>

    </div>
<!-- 
    <div class="grid place-items-center xl:px-32 2xl:px-80" >
        <img src="img/success.png" class=" pt-6 lg:pt-16 xl:pt-44">
        <h1 class="mt-7 text-2xl xl:text-4xl text-center">Your Order Is Completed!</h1>
        <p class="mt-7 font-semibold text-center" style="color: #8D92A7;">Thank you for your order! Your order is being processed and will be completed within 3-6 hours.You will receive an email confirmation when your order is completed.</p>
        <button class="addCart py-2.5 px-3 text-white mt-3 lg:mt-8 rounded-sm align-middle">Continue Shopping</button>
    </div>
        <div class="place-content-center py-3 2xl:pt-56 2xl:pb-32">
            <img src="img/sponsor.png"  class="w-full">
        </div> -->

</div>
@endsection