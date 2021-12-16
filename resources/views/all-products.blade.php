@extends('layouts.app')
@section('content')
<x-page-indicator page="Shop Grid Default"/>
<div class="container mx-auto px-4 xl:px-32">
    @include('filter-partial')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-4">
        <!-- <div class="relative bg-prod" style="height:280px; width:270px;">
            <div class="px-8 py-8">
                <img src="img/handbag.png">
            </div>
        </div>
        <div class="absolute pt-40 pl-4 ">
            <div class="flex flex-col px-3  space-y-3.5">
                <i class="fas fa-shopping-cart two"></i>
                <i class="fas fa-search-plus"></i>
                <i class="far fa-heart text-indigo-900"></i>
            </div>
        </div> -->
        <div class="flex flex-col">
            <div class="relative">
                <img src="img/handbag.png">

            </div>
        </div>
    
    </div>
        <!-- second part of of block-->
        <div class="">
            <h1 class="text-lg text-center">Sed at fermentum</h1>
            <div class="flex pt-4 place-content-center space-x-1.5">
                <i class="fas fa-circle text-orange-600 " style="font-size: 12px;"></i>
                <i class="fas fa-circle text-pink-600" style="font-size: 12px;"></i>
                <i class="fas fa-circle text-blue-800" style="font-size: 12px;"></i>
            </div>
            <div class="flex pt-4 space-x-2.5 place-content-center">
                <h1>$26.00</h1>
                <h1 class="text-pink-500"><del>$42.00</del></h1>
            </div>
        </div>
      <!---->
</div>
@endsection