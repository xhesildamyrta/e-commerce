@extends('layouts.app')
@section('content')
<x-page-indicator page="Contact Us"/>
<div class="container mx-auto px-4 pt-8 xl:px-32  xl:pt-28">
    <div class="lg:flex flex-row lg:space-x-28">
        <div class="flex flex-col lg:w-5/12">
            <h1 class="text-2xl lg:text-4xl">Information About us</h1>
            <p class="pt-3.5 text-gray-500 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis neque ultrices mattis aliquam, malesuada diam est. Malesuada sem tristique amet erat vitae eget dolor lobortis. Accumsan faucibus vitae lobortis quis bibendum quam.</p>
            <div class="flex space-x-3.5 pt-6">
                <div class="w-3 h-3 sm:w-6 sm:h-6  bg-blue-900 rounded-full"></div>
                <div class="w-3 h-3 sm:w-6 sm:h-6  bg-pink-500 rounded-full"></div>
                <div class="w-3 h-3 sm:w-6 sm:h-6  bg-blue-400 rounded-full"></div>
            </div>
        </div>
        <div class="mt-4 lg:mt-0">
            <h1 class="text-2xl lg:text-4xl">Contact Way</h1>
            <div class="flex flex-col space-y-4 sm:space-y-12 pt-3.5">
                <div class="grid grid-cols-2 sm:space-x-8 ">
                    <div class="flex place-items-center">
                    <div class="w-5 h-5 md:w-10 md:h-10 bg-blue-700 rounded-full"></div>
                        <div class="font-semibold text-gray-500 ">
                            <p class="pl-4">Tel: 877-67-88-99</p>
                            <p class="pl-4">E-Mail: shop@store.com</p>
                        </div>
                    </div>
                    <div class=" flex place-items-center">
                        <div class="w-5 h-5 md:w-10 md:h-10 bg-pink-400 rounded-full"></div>
                        <div class="font-semibold text-gray-500 ">
                            <p class="pl-4">Support Forum</p>
                            <p class="pl-4">For over 24hr</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 sm:space-x-8">
                    <div class=" flex place-items-center">
                    <div class="w-5 h-5 md:w-10 md:h-10 bg-orange-400 rounded-full"></div>
                        <div class="font-semibold text-gray-500 ">
                            <p class="pl-4">20 Margaret st, London</p>
                            <p class="pl-4">Great britain, 3NM98-LK</p>
                        </div>
                    </div>
                    <div class=" flex place-items-center">
                    <div class="w-5 h-5 md:w-10 md:h-10 bg-green-400 rounded-full"></div>
                        <div class="font-semibold text-gray-500 ">
                            <p class="pl-4">Free standard shipping</p>
                            <p class="pl-4">on all orders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:flex flex-row space-x-12 mt-8 mb-8  lg:mt-28 lg:mb-60">
        <div class="flex flex-col lg:w-3/5">
            <div class="block mt-3">
                <h1 class="text-2xl xl:text-4xl">Get In Touch</h1>
                <p class="font-semibold text-gray-400 pt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Mattis neque ultrices tristique amet erat vitae eget dolor los vitae lobortis quis bibendum quam.
                </p>
                <div class="flex flex-row space-x-6 pt-11 pb-10">
                    <input type="text" class="py-2 border-2 px-2 w-1/2 rounded focus:outline-none" placeholder="Your Name*">
                    <input type="email" class="py-2 border-2 px-2 w-1/2 rounded focus:outline-none" placeholder="Your E-mail">
                </div>
                <div class="flex flex-col space-y-10">
                    <input type="text" class="py-2 border-2 px-2 rounded focus:outline-none" placeholder="Subject*">
                    <input type="text" class="pt-2 pb-20 border-2 px-2 rounded focus:outline-none" placeholder="Type Your Messege*">
                </div>
                <div class="mt-2 sm:mt-8">
                    <button class="contactBtn py-2 px-10 text-white rounded"> Send Mail</button>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex">
            <img src="img/contact1.png" class="object-cover object-center">
        </div>
    </div>
</div>
@endsection