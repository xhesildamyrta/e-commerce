@extends('layouts.app')
@section('content')
<div class="shop-list w-full">
  <div class="container mx-auto py-6 xl:py-24 px-4 xl:px-32">
    <h1 class="text-xl xl:text-4xl text-indigo-900">About Us</h1>
    <ul class="flex space-x-2 pt-2">
      <li class="">Home  .</li>
      <li>Pages  .</li>
      <li>About Us</li>
    </ul>
  </div>
</div>
<div class="container mx-auto px-4 pt-16 xl:px-32  xl:pt-28">
    <div class="sm:flex sm:space-x-8">
      <img src="img/aboutUs.png"  alt="living-room.png" class="aboutUs  w-full sm:w-60 2xl:w-80 object-cover object-center">
      <div class="flex flex-col py-2 xl:py-6">
        <h1 class="prod-title text-lg font-semibold xl:text-4xl xl:w-7/12">Know About Our Ecomerce Business, History</h1>
        <p class="pt-3.5 text-gray-400 font-semibold xl:w-3/5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Mattis neque ultrices mattis aliquam, malesuada diam est. Malesuada sem tristique amet erat 
            vitae eget dolor lobortis. Accumsan faucibus vitae lobortis quis bibendum quam.
        </p>
        <div class="pt-8 pb-6 lg:pt-20 lg:pb-8">
            <button class="contactBtn py-2 font-semibold text-lg w-36 focus:outline-none text-white">Contact Us</button>
        </div>
      </div> 
    </div>
    <div class="pt-8 lg:pt-32">
        <h1 class="text-xl xl:text-4xl text-center text-black">Our Features</h1>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 space-x-7">
        <div class="flex flex-col place-items-center">
            <div class="w-16 h-16 mt-16">
                <img src="img/free-delivery.png" class="">
            </div>
            <div class="py-8 text-2xl">
                <h1 class="free-delivery">Free Delivery</h1>
            </div>
            <div class="text-center mb-12 px-4">
                <p class="font-bold text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida.</p>
            </div>
        </div>
        <div class="flex flex-col place-items-center">
            <div class="w-16 h-16 mt-16">
                <img src="img/free-delivery.png" class="">
            </div>
            <div class="py-8 text-2xl">
                <h1 class="free-delivery">Free Delivery</h1>
            </div>
            <div class="text-center mb-12 px-4">
                <p class="font-bold text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida.</p>
            </div>
        </div>
        <div class="flex flex-col place-items-center">
            <div class="w-16 h-16 mt-16">
                <img src="img/free-delivery.png" class="">
            </div>
            <div class="py-8 text-2xl">
                <h1 class="free-delivery">Free Delivery</h1>
            </div>
            <div class="text-center mb-12 px-4">
                <p class="font-bold text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida.</p>
            </div>
        </div>
        <div class="flex flex-col place-items-center">
            <div class="w-16 h-16 mt-16">
                <img src="img/free-delivery.png" class="">
            </div>
            <div class="py-8 text-2xl">
                <h1 class="free-delivery">Free Delivery</h1>
            </div>
            <div class="text-center mb-12 px-4">
                <p class="font-bold text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida.</p>
            </div>
        </div>
    </div>
    <div class="pt-12 xl:pt-44 text-center">
        <h1 class="text-black text-2xl lg:text-4xl">Our Client Say!</h1>
    </div>
</div>
@endsection