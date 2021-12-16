@extends('layouts.app')
@section('content')
<x-page-indicator page="Shop List"/>
<div class="container mx-auto px-4 xl:px-32">
@include('filter-partial')
  <div class="mt-4 2xl:mt-24 grid grid-cols-1 space-y-3 xl:space-y-8">
    @for ($i = 0; $i < 10; $i++)
    <x-product_list imgSrc="img/living.png" item="Accumsan tincidunt" price="$26.00" delPrice="$52.25" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo."/>
    @endfor
  </div>
  <div class="place-content-center py-3 pt-11 pb-6 2xl:pt-28 2xl:pb-20 ">
    <img src="img/sponsor.png"  class="w-full">
  </div>
</div>
@endsection