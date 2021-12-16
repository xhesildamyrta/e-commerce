<div class="sm:flex sm:space-x-8">
      <img src="{{$imgSrc}}"  alt="living-room.png" class="w-full sm:w-60 2xl:w-80 object-cover object-center">
      <div class="flex flex-col py-2 xl:py-6">
        <div class="flex place-items-center space-x-5">
          <h1 class="prod-title text-lg 2xl:text-xl">{{$item}}</h1>
          <div class="flex space-x-1.5">
            <i class="fas fa-circle text-orange-600 "style="font-size: 12px;"></i>
            <i class="fas fa-circle text-pink-600" style="font-size: 12px;"></i>
            <i class="fas fa-circle text-blue-800" style="font-size: 12px;"></i>
          </div>
        </div>
        <div class="flex place-items-center mt-1 2xl:mt-3.5 space-x-2.5">
          <h2>{{$price}}</h2>
          <p class="text-pink-600"><del>{{$delPrice}}</del></p>
          <div class="pl-5">
            <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>
            <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>     
            <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>
            <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>           
            <i class="fas fa-star w-4 h-4 text-gray-500 "></i>           
          </div>
        </div>
        <div class="block pt-1 2xl:pt-2.5 2xl:w-9/12">
          <p class="xl:text-lg text-gray-500">{{$description}}</p>
        </div>
        <div class="flex pt-3 space-x-8 2xl:pt-8 ">
        <i class="fas fa-shopping-cart two rounded-full hover:bg-gray-300 "></i>
        <i class="far fa-heart two rounded-full hover:bg-gray-300"></i>
        <i class="fas fa-search-plus rounded-full hover:bg-gray-300"></i>
        </div>
      </div> 
    </div>