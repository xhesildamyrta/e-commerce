@extends('layouts.app')
@section('content')
<x-page-indicator page="Shop Grid Default"/>
<div class="container mx-auto px-4 xl:px-32">
    @include('filter-partial')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-5 gap-y-6 xl:gap-x-20 xl:gap-y-12 mt-10 lg:mt-36 " id="divForm">
       
    

<div id="searchResult" style="display: none;">
    <div  class="flex flex-col group"  >
    <div class="flex py-8 place-content-center" style="background-color: #F6F7FB">
        <div class="flex-col px-3 text-indigo-900 space-y-3.5 place-items-center place-content-end hidden group-hover:flex">
            <a href="{{ route('shopping-cart')}}">
                <svg class="h-5 w-5 "  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="9" cy="21" r="1" />  <circle cx="20" cy="21" r="1" />  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" /></svg>
            </a>
            <i class="fas fa-search-plus text-indigo-900"></i>
            <i class="far fa-heart text-indigo-900"></i>
        </div>
        <div class="">
            <img src="img/trend1.png" class="h-32 lg:h-44">
        </div>
    </div>
    <div class="lg:mt-4">
        <h1 class="item-name text-lg text-center">nnnnaaaaaaaaa</h1>
        <div class="flex lg:pt-4 place-content-center space-x-1.5">
            <i class="fas fa-circle text-orange-600 " style="font-size: 12px;"></i>
            <i class="fas fa-circle text-pink-600" style="font-size: 12px;"></i>
            <i class="fas fa-circle text-blue-800" style="font-size: 12px;"></i>
        </div>
        <div class="flex pt-4 space-x-2.5 place-content-center">
            <h1 class="item-price">20</h1>
            <h1 class="item-del-price text-pink-500"><del>40</del></h1>
        </div>
    </div>
</div>
</div>
         
    </div>
  <div class="">

  </div>
    <div class="place-content-center py-3 xl:px-80 pt-11 pb-6 2xl:py-24">
        <img src="img/sponsor.png"  class="w-full">
    </div>
</div>
@endsection


<!--ajax-->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>


  
<script type="text/javascript">
$.ajaxSetup({
    headers : {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


    $('#inputSearch').on('keyup',function(){
        $inputSearch= $(this).val();
        if($inputSearch == ''){
            $('#searchResult').html('');
            $('#searchResult').hide();
        }
        else{
          $.ajax({
              method: "post",
              url: 'ajaxsearch',
              data: JSON.stringify({
                  inputSearch:$inputSearch
              }),
              headers:{
                  'Accept':'applicatoin/json',
                  'Content-Type':'applicatoin/json'
              },
              success:function(data){
                  var searchResultAjax='';
                   data = JSON.parse(data);
                   console.log(data);
                   $('#searchResult').show();

                   for(let i=0;i<data.length;i++){
                    searchResultAjax +=`<div  class="flex flex-col group"  >
    <div class="flex py-8 place-content-center" style="background-color: #F6F7FB">
        <div class="flex-col px-3 text-indigo-900 space-y-3.5 place-items-center place-content-end hidden group-hover:flex">
            <a href="{{ route('shopping-cart')}}">
                <svg class="h-5 w-5 "  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="9" cy="21" r="1" />  <circle cx="20" cy="21" r="1" />  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" /></svg>
            </a>
            <i class="fas fa-search-plus text-indigo-900"></i>
            <i class="far fa-heart text-indigo-900"></i>
        </div>
        <div class="">
            <img src="img/trend1.png" class="h-32 lg:h-44">
        </div>
    </div>
    <div class="lg:mt-4">
        <h1 class="item-name text-lg text-center">`+data[i].title+`</h1>
        <div class="flex lg:pt-4 place-content-center space-x-1.5">
            <i class="fas fa-circle text-orange-600 " style="font-size: 12px;"></i>
            <i class="fas fa-circle text-pink-600" style="font-size: 12px;"></i>
            <i class="fas fa-circle text-blue-800" style="font-size: 12px;"></i>
        </div>
        <div class="flex pt-4 space-x-2.5 place-content-center">
            <h1 class="item-price">`+data[i].price+`</h1>
            <h1 class="item-del-price text-pink-500"><del>`+data[i].price+`</del></h1>
        </div>
    </div>
</div>`;
                   }
                   $('#searchResult').html(searchResultAjax);
              }
              
          })

        }
    })
</script>