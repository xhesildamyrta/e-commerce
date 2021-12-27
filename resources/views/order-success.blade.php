@extends('layouts.app')
@section('content')
<x-page-indicator page="Order Completed"/>
<div class="container grid mx-auto px-4 xl:px-32 place-items-center mt-10 xl:mt-40">
<img src="img/success.png" class="">
    <div class="flex flex-col place-items-center">
        <h1 class="section-heading mt-7 text-4xl text-center">Your Order Is Completed!</h1>
        <p class="mt-7 font-semibold text-center xl:px-72" style="color: #8D92A7;">Thank you for your order! Your order is being processed and will be completed within 3-6 hours.
            You will receive an email confirmation when your order is completed.
        </p>
        <button class="addCart py-2.5 px-3 text-white w-60  mt-3 rounded-sm">Continue Shopping</button>
    </div>
</div>
<div class="place-content-center py-3 xl:px-80 pt-11 pb-6 2xl:py-24">
    <img src="img/sponsor.png"  class="w-full">
</div>
@endsection