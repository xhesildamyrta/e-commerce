<header>
  <div class="container px-4 xl:px-32 mx-auto md:flex md:items-center py-2.5 justify-between">
    <div class="flex items-center justify-between space-x-2 sm:space-x-12">
      <a href="mailto:mhhasanul@gmail.com">
        <i class="far fa-envelope"><span class="pl-2">mhhasanul@gmail.com</span></i>
      </a>
      <a href="tel:+(12345)67890" class="flex items-center space-x-2">
        <i class="fas fa-phone-volume"></i><p>(12345)67890</p>
      </a>
    </div>
    <div class="hidden md:display md:flex md:items-center space-x-5">
      <select class="focus:outline-none" name="language">
        <option value="English">English</option>
        <option value="Italian">Italian</option>
      </select>
      <select class="focus:outline-none" name="valute">
        <option value="usd">USD</option>
        <option value="euro">EUR</option>
      </select>
      <a href="#" class="flex items-center space-x-1"><p>Login</p><i class="far fa-user flex"></i></a>
      <a href="#" class="flex items-center space-x-1"><p>Wishlist</p><i class="far fa-heart"></i></a>
      <i class="fas fa-shopping-cart"></i>
    </div>
  </div>
</header>
<nav class="py-2 xl:py-4 flex">
  <div class="container px-4 xl:px-32 mx-auto md:flex items-center justify-between">
    <div class="flex justify-between items-center">
      <a href="#" class="logo text-lg font-bold xl:text-4xl">HEKTO</a>
      <button class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <div class="hidden flex-col mt-3 md:flex md:flex-row lg:space-x-3 xl:space-x-8 md:mt-0" id="navbar-collapse">
      <div class="flex items-center space-x-3 md:hidden pb-4 md:pb-0">
        <select class="focus:outline-none" name="language">
        <option value="English">English</option>
        <option value="Italian">Italian</option>
        </select>
        <select class="focus:outline-none" name="valute">
            <option value="usd">USD</option>
            <option value="euro">EUR</option>
        </select>
        <a class="flex items-center space-x-1" href="www.google.com"><p>Wishlist</p><i class="far fa-heart"></i></a>
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="#" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600">Home</a>
      <a href="#" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600">Pages</a>
      <a href="#" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600">Products</a>
      <a href="#" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600">Blog</a>
      <a href="#" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600">Shop</a>
      <a href="#" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600">Contact</a>
      <a href="#" class="p-2 lg:px-4 md:hidden text-indigo-600 text-center border border-solid border-p-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1 text-xl">Login <i class="far fa-user flex"></i></a>
    </div>
    <div class="flex py-2">
      <input type="text" name="search" class="w-full py-0.5 px-4 2xl:py-2  md:w-36 lg:w-80 border-2 focus:outline-none">
      <button class="search-btn px-4 text-white"><i class="fas fa-search"></i></button>
    </div>
  </div>
</nav>