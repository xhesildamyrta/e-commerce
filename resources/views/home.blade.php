@extends('layouts.app')
@section('content')
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
    @for ($i = 0; $i < 2; $i++)
        <div class="swiper-slide hidden lg:flex ">
            <div class="w-full" style="background-color: #F2F0FF;">
                <div class="flex  pr-44">
                    <div class="">
                        <img src="img/slide_candle.png">
                    </div>
                    <div class="space-y-3 py-14 xl:py-48">
                        <p class="font-bold text-pink-500">Best Furniture For Your Castle....</p>
                        <h3 class=" text-xl ld:text-5xl">New Furniture Collection Trends in 2020</h3>
                        <p class="font-bold text-indigo-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.</p>
                        <div class="">
                            <button class="addCart py-4 px-10 text-center text-white mt-7 tracking-wider ">Shop Now </button>
                        </div>
                    </div>
                    <div class="my-9">
                        <img src="img/sofaPromotional.png">
                    </div>
                </div>
            </div>
        </div>
        @endfor
        @for ($i = 0; $i < 4; $i++)
        <div class="swiper-slide lg:hidden">
            <img src="img/tortuga.png" class="w-full"> 
        </div>
        @endfor
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="container mx-auto px-4 xl:px-32">
    <div class=" mt-6 lg:mt-32">
        <h1 class="text-xl lg:text-4xl text-center">Featured Products</h1>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-3 gap-x-7 mt-12">
        @for ($i = 0; $i < 4; $i++)

        <x-feature_product imgSrc="img/chair1.png" item="Cantilever chair" code="Code - Y523201" price="$42.00"/>

        @endfor
    </div>
    <div class="">
        <h1 class="mt-5 text-xl lg:mt-16 text-center lg:text-4xl">Latest Products</h1>
        <div class="flex text-sm  md:text-lg place-content-center space-x-1.5 sm:space-x-14 pt-5" style="color:#151875;">
            <div>New Arrival</div>
            <div>Best Seller</div>
            <div>Featured</div>
            <div>Special Offer</div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-x-8 gap-y-5 lg:gap-y-20 mt-4 lg:mt-16">
    @for ($i = 0; $i < 6; $i++)
    <x-latest_product src="img/brownchair.png" item="Comfort Handy Craft" price="$42.00" delPrice="$65.00"/>
        
    @endfor
    </div>
    <h1 class=" text-xl lg:text-4xl text-center my-14">What Shopex Offer!</h1>
    <div class="grid grid-cols-2 md:grid-cols-4 md:space-x-7">
        <x-shopex_offer imgSrc="img/free-delivery.png" text="24/7 Support" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida."/>
        <x-shopex_offer imgSrc="img/cashback 1.png" text="24/7 Support" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida."/>
        <x-shopex_offer imgSrc="img/premium-quality.png" text="24/7 Support" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida."/>
        <x-shopex_offer imgSrc="img/24-hours-support.png" text="24/7 Support" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida."/>
    </div>
</div>
<div class="w-full mt-6 lg:mt-32">
    <div class="lg:flex xl:px-48 " style="background-color: #F1F0FF;">
        <img src="img/sofa.png" class="w-1/2 object-cover object-center">
        <div class="flex flex-col px-4 space-y-3.5 lg:pt-24">
            <h1 class="text-xl mb-4 lg:text-4xl lg:mb-8">Unique Features Of leatest & Trending Poducts</h1>
            <div class="flex place-items-center space-x-3 ">
            <i class="fas fa-circle text-yellow-600" style="font-size: 12px;"></i>
                <p class="text-gray-400 font-semibold">All frames constructed with hardwood solids and laminates</p>
            </div>
            <div class="flex  place-items-center space-x-3">
                <i class="fas fa-circle text-pink-600" style="font-size: 12px;"></i>
                <p class="text-gray-400 font-semibold">Reinforced with double wood dowels, glue, screw - nails corner blocks and machine nails</p>
            </div>
            <div class="flex place-items-center space-x-3">
                <i class="fas fa-circle text-blue-800" style="font-size: 12px;"></i>
                <p class="text-gray-400 font-semibold">Arms, backs and seats are structurally reinforced</p>
            </div>
            <div class="flex space-x-5 mt-9 pb-2">
                <button class="addCart py-2 px-3 w-36 text-center text-white  mt-9">Add To Cart</button>
                <div class="space-y-0.5 pt-9">
                    <h1 class="text-sm">B&B Italian Sofa</h1>
                    <p class="text-xs">$32.00</p>
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="container mx-auto px-4 xl:px-32">
    <h1 class="mt-6 mb-3 text-xl lg:mt-32 lg:mb-12 lg:text-4xl text-center">Trending Products</h1>
    <div class="grid grid-cols-2 gap-x-3 gap-y-3 md:grid-cols-4 md:space-x-8">
        @for ($i = 0; $i < 4; $i++)
        <x-trending_product imgSrc="img/trend1.png" item="Cantilever chair" price="$26.00" delPrice="$42.00"/>
        @endfor
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-1 gap-x-3 mt-10 lg:gap-x-8 w-full">
        <div class="px-6 space-y-2.5" style="background-color: #FFF6FB;">
            <h1 class="pt-3 md:pt-8">23% off in all products</h1>
            <div class="flex">
                <p class="underline underline-offset-4 text-pink-500">Shop Now</p>
                <img src="img/clock1.png" class="pt-2 pl-1">
            </div>
        </div>
        <div class="px-6 space-y-2.5 w-full" style="background-color: #EEEFFB;">
            <h1 class="pt-3 md:pt-8">23% off in all products</h1>
            <div class="block">
                <p class="underline underline-offset-4 text-pink-500">View Collection</p>
                <img src="img/tvhandler.png" class="float-right pt-2 pl-3">
            </div>
        </div>
        <div class="flex flex-col w-full  space-y-5">
            <div class="flex space-x-2">
                <div class="py-1.5 px-5" style="background-color: #F5F6F8;">
                    <img src="img/chair3.png">
                </div>
                <div class="block">
                    <div class="space-y-1 py-2">
                        <h1>Executive Seat chair</h1>
                        <p class="text-xs text-indigo-800"><del>$32.00</del></p>
                    </div>
                </div>
            </div>
            <div class="flex space-x-2">
                <div class="py-1.5 px-5" style="background-color: #F5F6F8;">
                    <img src="img/chair3.png">
                </div>
                <div class="block">
                    <div class="space-y-1 py-2">
                        <h1>Executive Seat chair</h1>
                        <p class="text-xs text-indigo-800"><del>$32.00</del></p>
                    </div>
                </div>
            </div>
            <div class="flex space-x-2">
                <div class="py-1.5 px-5" style="background-color: #F5F6F8;">
                    <img src="img/chair3.png">
                </div>
                <div class="block">
                    <div class="space-y-1 py-2">
                        <h1>Executive Seat chair</h1>
                        <p class="text-xs text-indigo-800"><del>$32.00</del></p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <h1 class="text-xl lg:text-4xl text-center mt-6 lg:mt-32">Discount Item</h1>
    <div class="flex space-x-2 lg:space-x-6 place-items-center place-content-center mt-3 md:mt-8">
        <h1 class="text-pink-500 text-lg">Wood Chair</h1>
        <h1>Plastic Chair</h1>
        <h1>Sofa Colletion</h1>
    </div>
    <div class="flex">
        <div class="flex flex-col mt-12 lg:mt-28">
            <h1 class="text-xl text-center lg:text-4xl lg:text-left">20% Discount Of All Products</h1>
            <p class="text-pink-500 text-center  lg:text-leftlg:pt-4">Eams Sofa Compact</p>
            <p class="mt-5 text-center text-gray-500 lg:text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Eu eget feugiat habitasse nec, bibendum condimentum.</p>
            <div class="grid grid-cols-2 mt-5 text-gray-500 ">
                <div class="flex place-items-center space-x-2 ">
                    <i class="fas fa-check"></i>
                    <p>Material expose like metals</p>
                </div>
                <div class="flex place-items-center space-x-2">
                    <i class="fas fa-check"></i>
                    <p>Material expose like metals</p>
                </div>
                <div class="flex place-items-center space-x-2">
                    <i class="fas fa-check"></i>
                    <p>Material expose like metals</p>
                </div>
                <div class="flex place-items-center space-x-2">
                    <i class="fas fa-check"></i>
                    <p>Material expose like metals</p>
                </div>
            </div>
            <button class="addCart py-2 px-3 w-36 text-center text-white  mt-9">Shop Now </button>
        </div>
        <div class="hidden lg:w-full lg:flex background-wrapper">
            <img src="img/tortuga.png">
        </div>
    </div>
    <h1 class="text-center text-4xl mt-20">Top Categories</h1>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="grid grid-cols-2 gap-x-3 gap-y-3 lg:grid-cols-4 mt-12">
                @for ($i = 0; $i < 4; $i++)
                <x-top_category imgSrc="img/chair2.png" cat1="Mini" cat2="LCW" cat3="Chair" price="$56.00"/>
                 @endfor
                </div>
            </div>
            <div class="swiper-slide">
                <div class="grid grid-cols-2 gap-x-3 gap-y-3 lg:grid-cols-4 mt-12">
                    @for ($i = 0; $i < 4; $i++)
                    <x-top_category imgSrc="img/chair2.png" cat1="Mini" cat2="LCW" cat3="Chair" price="$56.00"/>
                    @endfor
                </div>
            </div>
            <div class="swiper-slide"> <div class="grid grid-cols-2 gap-x-3 gap-y-3 lg:grid-cols-4 mt-12">
                @for ($i = 0; $i < 4; $i++)
                <x-top_category imgSrc="img/chair2.png" cat1="Mini" cat2="LCW" cat3="Chair" price="$56.00"/>
                @endfor
            </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
   
</div>
<div class="h-full bg-[url('/img/nice.png')] place-content-center mt-32" style="background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
    <div class="grid place-items-center pt-11 lg:pt-44">
        <h1 class="text-center text-xl font-bold lg:text-4xl tracking-wider lg:font-medium  xl:w-1/3">Get Leatest Update By Subscribe Our Newslater</h1>
        <button class="addCart py-2 px-3 w-36 text-center text-white  mt-7 mb-7 lg:mb-24">Shop Now </button>
    </div>
</div>
<div class="place-content-center py-3 xl:px-80 pt-11 pb-6 2xl:py-24">
    <img src="img/sponsor.png"  class="w-full">
</div>
<div class="container mx-auto px-4 xl:px-32">
    <h1 class=" text-xl lg:text-4xl text-center">Latest Blog</h1>
    <div class="grid grid-cols-1 sm:grid-cols-3 mt-4 lg:mt-20 gap-x-3 xl:gap-x-14 mb-28">
        @for ($i = 0; $i < 3; $i++)
        <x-latest_blog imgSrc="img/lv.png" author="SaberAli" date="21 August,2020" title="Top esssential Trends in 2021" body="More off this less hello samlande lied much over tightly circa horse taped mightly"/>
        @endfor
    </div>
</div>
@endsection