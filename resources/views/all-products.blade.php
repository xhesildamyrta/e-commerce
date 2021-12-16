@extends('layouts.app')
@section('content')
<x-page-indicator page="Shop Grid Default"/>
<div class="container mx-auto px-4 xl:px-32">
    @include('filter-partial')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-5 gap-y-6 xl:gap-x-20 xl:gap-y-12 mt-10 lg:mt-36 ">
        @for ($i = 0; $i < 12; $i++)
        <x-grid_product imgSrc="img/headphones.png" item="Sed at fermentum" price="$26.00" delPrice="$42.00"/>
        @endfor
    </div>
    <div class="place-content-center py-3 xl:px-80 pt-11 pb-6 2xl:py-24">
        <img src="img/sponsor.png"  class="w-full">
    </div>
</div>
@endsection