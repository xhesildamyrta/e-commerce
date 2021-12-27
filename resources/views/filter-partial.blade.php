
<div class="mt-6 2xl:mt-32">
    <h2 class="section-heading mt-6 text-lg  xl:text-2xl">Ecommerce Acceories & Fashion item</h2>
    <div class="flex space-x-2 lg:space-x-7 lg:place-content-end">
        <div class="flex items-center space-x-2">
            <h1 class="text-xs text-indigo-900">Per Page:</h1>
            <input type="number"  class="border-2 px-2 focus:outline-none text-gray-400 w-14 h-6">
        </div>
        <div class="flex items-center space-x-2">
            <h1 class="text-xs text-indigo-900">Sort By:</h1>
            <select class="border-2 px-3 text-xs text-gray-400 h-6 focus:outline-none" >
                <option>Price</option>
                <option>Name</option>
                
            </select>
        </div>
        <div class="hidden sm:display sm:flex place-items-center space-x-2">
            <h1 class="text-xs text-indigo-900 ">View:</h1>
            <div onclick="gridView()"><i class="fa fa-th-large"></i></div>&nbsp;
            <div onclick="listView()"><i class="fas fa-list"></i></div> 
            <input type="text" class="border-2 px-2 focus:outline-none text-gray-400 h-6 w-40" >
            <button type="submit" class="border-2 text-xs text-indigo-900 h-6" >Filter</button>
        </div>
    </div>
    <span class="search-result text-xs">About 9,620 results (0.62 seconds)</span>
</div>