<div class="flex flex-col w-full" >
    <div clas style="background-color: #F5F6F8;">
        <div class="px-3 pt-3">
            <img src="{{$imgSrc}}" class="w-full">
        </div>
    </div>
    <div class="pt-4 space-y-4 pb-8" style="background: linear-gradient(0deg, #FFFFFF, #FFFFFF), #FFFFFF;">
        <h1 class="text-center">{{$item}}</h1>
        <div class="flex place-content-center space-x-3">
            <h1>{{$price}}</h1>
            <p class="text-gray-500"><del>{{$delPrice}}</del></p>
        </div>
    </div>
</div>