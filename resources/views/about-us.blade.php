@extends('layouts.app')
@section('content')
<x-page-indicator page="About Us"/>
<div class="container mx-auto px-4 mt-16 xl:px-32  xl:mt-28">
    <div class="sm:flex sm:space-x-8">
        <img src="img/aboutUs.png"  alt="living-room.png" class="aboutUsImg  w-full sm:w-60 2xl:w-80 object-cover object-center">
        <div class="flex flex-col place-items-center sm:place-items-start py-2 xl:py-6">
            <h1 class="section-heading text-lg font-semibold text-center xl:text-4xl xl:w-9/12 tracking-wider sm:text-left">Know About Our Ecomerce Business, History</h1>
            <p class="mt-3.5 text-gray-400 font-semibold xl:w-3/5 text-center sm:text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mattis neque ultrices mattis aliquam, malesuada diam est. Malesuada sem tristique amet erat vitae eget dolor lobortis. Accumsan faucibus vitae lobortis quis bibendum quam.</p>
            <div class="pt-8  lg:pt-20 ">
                <button class="contactBtn py-2 font-semibold text-lg w-36 focus:outline-none text-white">Contact Us</button>
            </div>
        </div> 
    </div>
    <div class="pt-8  lg:pt-36">
        <h1 class="section-heading text-xl xl:text-4xl  text-center text-black">Our Features</h1>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 space-y-0 space-x-3 lg:space-x-7 mt-6 lg:mt-32">
        <x-shopex_offer imgSrc="img/free-delivery.png" text="Free Delivery" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida."/>
        <x-shopex_offer imgSrc="img/cashback 1.png" text="100% Cash Back" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida."/>
        <x-shopex_offer imgSrc="img/premium-quality.png" text="Quality Product" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida."/>
        <x-shopex_offer imgSrc="img/24-hours-support.png" text="24/7 Support" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida."/>
    </div>
</div>
<div class="" style="background-color:#FBFBFF;">
    <div class="mt-12 px-4 xl:mt-44 text-center  mx-autoxl:px-32 xl:py-16">
        <h1 class="section-heading text-black text-2xl lg:text-4xl">Our Client Say!</h1>
        <div class="flex space-x-3.5 pt-6 lg:pt-16 place-content-center">
            <img src="img/person1.png" class="pt-2">
            <img src="img/person1.png" class="pb-2">
            <img src="img/person1.png" class="pt-2">
        </div>
        <div class="mt-6">
            <h1 class="text-xl font-semibold">Selina Gomez</h1>
            <p class="font-semibold text-gray-400 text-xs">Ceo At Webecy Digital</p> 
            <p class="text-center font-bold text-gray-400 pt-4 px-4 lg:px-32  xl:px-72">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non duis ultrices quam vel dui sollicitudin aliquet id arcu. Nam vitae a enim nunc, sed sapien egestas ac nam. Tristique ultrices dolor aliquam lacus volutpat praesent.</p>
        </div>
        <div class="flex space-x-1.5 place-content-center mt-4">
            <div class="w-3.5 h-1 rounded-xl bg-pink-400"></div>
            <div class="w-3.5 h-1 rounded-xl bg-pink-600"></div>
            <div class="w-3.5 h-1 rounded-xl bg-pink-400"></div>
        </div>
        <div class="mt-14 xl:mt-80"></div>
    </div>
</div>

@endsection