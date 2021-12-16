<div class="flex flex-col place-items-center">
    <img src="{{$imgSrc}}" class="rounded-md">
    <div class="content-wrapper pt-1.5 md:pt-5 px-1.5 md:px-5" style="box-shadow: 0px 8px 40px rgba(49, 32, 138, 0.05);">
        <div class="lg:flex lg:space-x-7">
            <div class="flex space-x-2 place-items-center">
                <i class="fas fa-pen-nib text-pink-600"></i>
                <p class="text-indigo-600">{{$author}}</p>
            </div>
            <div class="flex space-x-2 place-items-center">
                <i class="fas fa-calendar-alt text-orange-600"></i>
                <p class="text-indigo-600">{{$date}}</p>
            </div>
        </div>
        <h1 class="mt-2 lg:mt-8 text-sm lg:text-lg">{{$title}}</h1>
        <p class="mt-4 text-gray-400">{{$body}}</p>
        <p class="text-indigo-600 mt-4 underline underline-offset-2 mb-8">Read More</p>
    </div>
</div>