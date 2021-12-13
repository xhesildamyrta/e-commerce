@extends('layouts.app')
@section('content')
<div class="shop-list w-full">
  <div class="container mx-auto py-6 xl:py-24 px-4 xl:px-32">
    <h1 class="text-xl xl:text-4xl text-indigo-900">Contact Us</h1>
    <ul class="flex space-x-2 pt-2">
      <li class="">Home  .</li>
      <li>Pages  .</li>
      <li>Contact Us</li>
    </ul>
  </div>
</div>
<div class="container mx-auto px-4 pt-16 xl:px-32  xl:pt-28">
    <div class="lg:flex flex-row lg:space-x-28">
        <div class="flex flex-col lg:w-5/12">
            <h1 class="text-4xl">Information About us</h1>
            <p class="pt-3.5 text-gray-500 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Mattis neque ultrices mattis aliquam, malesuada diam est. 
                 Malesuada sem tristique amet erat vitae eget dolor lobortis. 
                 Accumsan faucibus vitae lobortis quis bibendum quam.
            </p>
            <div class="flex space-x-3.5 pt-6">
                <i class="fas fa-circle text-blue-800" style="font-size: 25px;"></i>
                <i class="fas fa-circle text-pink-600" style="font-size: 25px;"></i>
                <i class="fas fa-circle text-blue-400" style="font-size: 25px;"></i>
            </div>
        </div>
        <div class="">
            <h1 class="text-4xl">Contact Way</h1>
            <div class="flex flex-col space-y-4 sm:space-y-12 pt-3.5">
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:space-x-8 ">
                    <div class=" flex place-items-center">
                        <i class="fas fa-circle text-blue-800" style="font-size: 45px;"></i>
                        <div class="font-semibold text-gray-500 ">
                            <p class="pl-4">Tel: 877-67-88-99</p>
                            <p class="pl-4">E-Mail: shop@store.com</p>
                        </div>
                    </div>
                    <div class=" flex place-items-center">
                        <i class="fas fa-circle text-blue-800" style="font-size: 45px;"></i>
                        <div class="font-semibold text-gray-500 ">
                            <p class="pl-4">Tel: 877-67-88-99</p>
                            <p class="pl-4">E-Mail: shop@store.com</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:space-x-8">
                    <div class=" flex place-items-center">
                        <i class="fas fa-circle text-blue-800" style="font-size: 45px;"></i>
                        <div class="font-semibold text-gray-500 ">
                            <p class="pl-4">Tel: 877-67-88-99</p>
                            <p class="pl-4">E-Mail: shop@store.com</p>
                        </div>
                    </div>
                    <div class=" flex place-items-center">
                        <i class="fas fa-circle text-blue-800" style="font-size: 45px;"></i>
                        <div class="font-semibold text-gray-500 ">
                            <p class="pl-4">Tel: 877-67-88-99</p>
                            <p class="pl-4">E-Mail: shop@store.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:flex flex-row">
        
    </div>
</div>
@endsection