<div class="flex flex-col">
    <div class="" style="background-color: #F7F7F7;">
        <img src="{{$src}}" class=" px-2 py-2 lg:px-16 lg:py-6">
    </div>
    <div class="lg:flex place-items-center justify-between lg:mt-4 shadow-sm">
        <h1 class="item-name text-xs">{{$item}}</h1>
        <div class="flex space-x-3 pt-1">
            <p class="item-price text-xs">{{$price}}</p>
            <p class="item-del-price text-pink-600 text-xs pr-4"><del>{{$delPrice}}</del></p>
        </div>
    </div>
</div>