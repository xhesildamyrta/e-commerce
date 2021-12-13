@extends('layouts.app')
@section('content')
<div class="shop-list w-full">
  <div class="container mx-auto py-6 xl:py-24 px-4 xl:px-32">
    <h1 class="text-xl xl:text-4xl text-indigo-900">Shop List</h1>
    <ul class="flex space-x-2 pt-2">
      <li class="">Home  .</li>
      <li>Pages  .</li>
      <li>Shop List</li>
    </ul>
  </div>
</div>
<div class="container mx-auto px-4 xl:px-32">
  <h2 class="pt-6 text-lg 2xl:pt-32 xl:text-2xl">Ecommerce Acceories & Fashion item </h2>
  <div class="mobi-results flex  space-x-7 lg:place-content-end">
    <div class="flex items-center space-x-2">
      <h1 class="text-xs text-indigo-900">Per Page:</h1>
      <input type="number" class="border-2 px-2 focus:outline-none text-gray-400" style="height:25px; width:55px;">
    </div>
    <div class="flex items-center space-x-2">
      <h1 class="text-xs text-indigo-900">Sort By:</h1>
      <select class="border-2 px-3 text-xs text-gray-400" style="height:25px;">
        <option>Best Match</option>
      </select>
    </div>
    <div class="hidden sm:display sm:flex items-center space-x-2">
      <h1 class="text-xs text-indigo-900 ">View:</h1>
      <i class="fas fa-th-large"></i>
      <i class="fas fa-list"></i>
      <input type="text" class="border-2 px-2 focus:outline-none text-gray-400" style="height:25px; max-width:162px;">
    </div>
  </div>
  <span class="search-result text-xs">About 9,620 results (0.62 seconds)</span>
  <div class="pt-4 2xl:pt-24 grid grid-cols-1 space-y-3 xl:space-y-8">
    @for ($i = 0; $i < 10; $i++)
    <div class="sm:flex sm:space-x-8">
      <img src="img/living.png"  alt="living-room.png" class="w-full sm:w-60 2xl:w-80 object-cover object-center">
      <div class="flex flex-col py-2 xl:py-6">
        <div class="flex place-items-center space-x-5">
          <h1 class="prod-title text-lg 2xl:text-xl">Accumsan tincidunt</h1>
          <div>
            <i class="fas fa-circle text-orange-600 " style="font-size: 12px;"></i>
            <i class="fas fa-circle text-pink-600" style="font-size: 12px;"></i>
            <i class="fas fa-circle text-blue-800" style="font-size: 12px;"></i>
          </div>
        </div>
        <div class="flex place-items-center pt-1 2xl:pt-3.5 space-x-2.5">
          <h2>$26.00</h2>
          <p class="text-pink-500"><del>$52.25</del></p>
          <div class="pl-5">
            <i class="fas fa-star w-4 h-4 text-yellow-500 " style="font-size: 13px;"></i>
            <i class="fas fa-star w-4 h-4 text-yellow-500 " style="font-size: 13px;"></i>     
            <i class="fas fa-star w-4 h-4 text-yellow-500 " style="font-size: 13px;"></i>
            <i class="fas fa-star w-4 h-4 text-yellow-500 " style="font-size: 13px;"></i>           
            <i class="fas fa-star w-4 h-4 text-yellow-500 " style="font-size: 13px;"></i>           
          </div>
        </div>
        <div class="block pt-1 2xl:pt-2.5 2xl:w-9/12">
          <p class="xl:text-lg text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.</p>
        </div>
        <div class="flex pt-3 space-x-8 2xl:pt-8">
        <i class="fas fa-shopping-cart two"></i>
        <i class="far fa-envelope two"></i>
        <i class="fas fa-search-plus"></i>
        </div>
      </div> 
    </div>
    @endfor
  </div>
  <div class="place-content-center py-3 2xl:pt-56 2xl:pb-32 2xl:px-48">
    <img src="img/sponsor.png"  alt="living-room.png">
  </div>
</div>
@endsection