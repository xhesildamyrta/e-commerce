<div class="divwrapper sm:flex sm:space-x-8" style="box-shadow: 0px 0px 25px 5px rgba(246, 246, 253,0.5);">
  <img src="{{$imgSrc}}" alt="living-room.png" class="pt-2 pl-3 w-full sm:w-60 2xl:w-80 2xl:h-56 object-cover object-center">
  <div class="flex flex-col py-2 xl:py-6">
    <div class="flex place-items-center space-x-5">
      <h1 class="item-name text-lg 2xl:text-xl">{{$item}}</h1>
      <div class="flex space-x-1.5">
        <i class="fas fa-circle text-orange-600 " style="font-size: 12px;"></i>
        <i class="fas fa-circle text-pink-600" style="font-size: 12px;"></i>
        <i class="fas fa-circle text-blue-800" style="font-size: 12px;"></i>
      </div>
    </div>
    <div class="flex place-items-center mt-1 2xl:mt-3.5 space-x-2.5">
      <h2 class="item-price">{{$price}}</h2>
      <p class="item-del-price text-pink-600"><del>{{$delPrice}}</del></p>
      <div class="pl-5">
        <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>
        <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>
        <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>
        <i class="fas fa-star w-4 h-4 text-yellow-500 "></i>
        <i class="fas fa-star w-4 h-4 text-gray-500 "></i>
      </div>
    </div>
    <div class="block pt-1 2xl:pt-2.5 2xl:w-9/12">
      <p class="item-desc xl:text-lg text-gray-400">{{$description}}</p>
    </div>
    <div class="flex pt-3 place-items-center space-x-8 2xl:pt-8 ">
      <button type="submit" class="">
        <svg class="h-5 w-5 text-indigo-800 hover:shadow-md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="9" cy="21" r="1" />
          <circle cx="20" cy="21" r="1" />
          <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
        </svg>
      </button>
      <i class="far fa-heart two rounded-full hover:bg-gray-300"></i>
      <i class="fas fa-search-plus rounded-full hover:bg-gray-300"></i>
    </div>
  </div>
</div>