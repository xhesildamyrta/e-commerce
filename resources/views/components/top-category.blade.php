<div class="flex flex-col place-items-center group">
    <div class="rounded-full px-10 py-5 grid place-items-center hover:border-purple-600 border-transparent border-l-4 hover:border-current" style="background-color: #F6F7FB;box-shadow: 0px 8px 40px rgba(49, 32, 138, 0.05);">
        <img src="{{$imgSrc}}" class="">
        <button class="viewDetail-btn py-2 px-3 text-white text-sm text-center hidden group-hover:block">View Shop</button>
    </div>
    <div class="place-items-center mt-2 lg:mt-6">
        <div class="flex space-x-1.5 text-xl place-content-center">
            <h1>{{$cat1}}</h1>
            <h1>{{$cat2}}</h1>
            <h1>{{$cat3}}</h1>
        </div>
        <h1 class="text-center mt-2">{{$price}}</h1>
    </div>
</div>