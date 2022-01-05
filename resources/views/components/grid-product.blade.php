<div class="flex flex-col group" >
    <div class="flex py-8 place-content-center" style="background-color: #F6F7FB">
        <div class="flex-col px-3 text-indigo-900 space-y-3.5 place-items-center place-content-end hidden group-hover:flex">
            <a href="{{ route('cart.store')}}">
                <svg class="h-5 w-5 "  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="9" cy="21" r="1" />  <circle cx="20" cy="21" r="1" />  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" /></svg>
            </a>
            <i class="fas fa-search-plus text-indigo-900"></i>
            <i class="far fa-heart text-indigo-900"></i>
        </div>
        <div class="">
            <img src="{{$imgSrc}}" class="h-32 lg:h-44">
        </div>
    </div>
    <div class="lg:mt-4">
        <h1 class="item-name text-lg text-center">{{$item}}</h1>
        <div class="flex lg:pt-4 place-content-center space-x-1.5">
            <i class="fas fa-circle text-orange-600 " style="font-size: 12px;"></i>
            <i class="fas fa-circle text-pink-600" style="font-size: 12px;"></i>
            <i class="fas fa-circle text-blue-800" style="font-size: 12px;"></i>
        </div>
        <div class="flex pt-4 space-x-2.5 place-content-center">
            <h1 class="item-price">{{$price}}</h1>
            <h1 class="item-del-price text-pink-500"><del>{{$delPrice}}</del></h1>
        </div>
    </div>
</div>