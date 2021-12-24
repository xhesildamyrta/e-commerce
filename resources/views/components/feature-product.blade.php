<div class="flex flex-col group">
            <div class="img-wrapper h-52 lg:h-48 xl:h-64">
                <div class=" pt-3 pl-3 space-x-2 lg:space-x-5 place-items-center hidden group-hover:flex">
                    <svg class="h-5 w-5 two text-indigo-900 "  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="9" cy="21" r="1" />  <circle cx="20" cy="21" r="1" />  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" /></svg>
                    <i class="fas fa-search-plus"></i>
                    <i class="far fa-heart text-indigo-900 border"></i>
                </div>
                <div class="grid place-items-center px-3 pt-4 lg:px-16">
                    <img src="{{$imgSrc}}" class="object-center">
                    <button class="viewDetail-btn py-1 sm:py-2 px-1 text-white text-sm text-center hidden group-hover:flex">View Details</button>
                </div>
            </div>
            <div class="content-wrapper text-center space-y-1 sm:space-y-3 group-hover:bg-blue-600" style="box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);">
               <h1 class="text-pink-500 pt-2 sm:pt-4 group-hover:text-white">{{$item}}</h1>
                <div class="flex space-x-1.5 place-content-center">
                    <div class="w-3.5 h-1 rounded-xl" style="background-color: #05E6B7;"></div>
                    <div class="w-3.5 h-1 rounded-xl" style="background-color: #F701A8;"></div>
                    <div class="w-3.5 h-1 rounded-xl" style="background-color: #00009D;"></div>
                </div>
                <div >
                    <h1 class="text-sm group-hover:text-white">{{$code}}</h1>
                    <h1 class="pt-3 pb-4 group-hover:text-white">{{$price}}</h1>
                </div>
            </div>
        </div> 