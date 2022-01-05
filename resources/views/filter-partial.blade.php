
<div class="mt-6 2xl:mt-32">
    <h2 class="section-heading mt-6 text-lg  xl:text-2xl">Ecommerce Acceories & Fashion item</h2>
    <div class="flex space-x-2 lg:space-x-7 lg:place-content-end">
        <div class="flex items-center space-x-2">
            <h1 class="text-xs text-indigo-900">Per Page:</h1>
            <input type="number"  class="border-2 px-2 focus:outline-none text-gray-400 w-14 h-6">
        </div>
        <div class="flex items-center space-x-2">
            <h1 class="text-xs text-indigo-900">Sort By:</h1>
            <form action="{{route('all-products')}}" method="GET">
                @csrf
                <select name="sortprod" class="border-2 px-3 text-xs text-gray-400 h-6 focus:outline-none">
                    <option value="asc">A-Z</option>
                    <option value="desc">Z-A</option>
                    <option value="lowerPrice">0-9999</option>
                    <option value="higherPrice">9999-0</option>
                </select>
                <button class="border-2 px-3 text-xs text-gray-400 h-6 focus:outline-none">Sort</button>
            </form>
        </div>
        <div class="hidden sm:display sm:flex place-items-center space-x-2">
            <h1 class="text-xs text-indigo-900 ">View:</h1>
            <div onclick="gridView()"><i class="fa fa-th-large"></i></div>&nbsp;
            <div onclick="listView()"><i class="fas fa-list"></i></div> 
            <input type="" id="inputSearch" class="border-2 px-2 focus:outline-none text-gray-400 h-6 w-40" >
           
        </div>
    </div>
    <span class="search-result text-xs">About 9,620 results (0.62 seconds)</span>
</div>