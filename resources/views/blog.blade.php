@extends('layouts.app')
@section('content')
<x-page-indicator page="Blog Page"/>
<div class="container mx-auto px-4 pt-8 xl:px-32  xl:pt-28">
@if(session()->has('success_message')) 
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert" id="alert">
             {{ session()->get('success_message') }}
        </div>
    @endif
    
    @if(count($errors) > 0)
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="grid grid-cols-1 md:flex gap-y-10  gap-x-10">
        <div class="grid gap-y-14 md:w-8/12">
        @if(!empty($blogs) && $blogs->count())
            @foreach ($blogs as $blog)
            <x-latest_blog imgSrc="{{asset('img/'.$blog->photo)}}" author="{{$blog->user->name}}" date="{{$blog->creation_date}}" title="{{$blog->title}}" body="{{$blog->content}}"/>
            <input type="hidden" name="blog_id" value="{{ $blog->id }}"/>

            
            <div class="comment-section">
                <h1 class="text-2xl font-semibold">Comment</h1>
                <div class="grid gap-y-6 mt-4">
                @foreach ($blog->comments as $comment)
                <div class=" grid sm:flex space-x-3 px-2 py-2 shadow-md w-3/4">
                        <img src="img/avatar.jpg" class="hidden sm:flex w-24 ">
                        <div class="">
                            <div class="flex place-items-center space-x-4">
                                <h1 class="text-lg">{{$comment->user->name}}</h1>
                                <p class="text-gray-400">{{$comment->creation_date}}</p>
                            </div>
                            <p class="text-gray-400">{{$comment->comment}}
                            </p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <h1 class="text-2xl font-semibold">Post Comment</h1>
            <form action="" method="POST">
                @csrf
                <div class="flex flex-col gap-y-3 md:w-10/12 mt-6">
                    <div class="">
                        <input type="hidden" name="id" value="{{$blog->id}}">
                        <textarea name="author_comment" class="resize-none rounded-md border border-blueGray-300 outline-none focus:outline-none focus:ring w-full px-3 pt-3 " rows="7" placeholder="Write Comment*"></textarea>
                    </div>
                    <div class=" bg-pink-600 py-2 px-3 text-center text-white font-semibold text-lg mt-6 rounded w-40 mb-8">
                        <button type="submit" class="">Post Comment</button>
                    </div>
                </div>
            </form>
            @endforeach
            @else
                <h1 class="text-red-500">There are no blogs created</h1>
            @endif
            <hr class="text-gray-300">
            <div class="w-60 shadow">
                <div class="flex space-x-10 py-3 px-3 place-content-center ">
                    <i class="fab fa-facebook text-blue-700"></i>
                    <i class="fab fa-twitter text-blue-400"></i>
                    <i class="fab fa-instagram text-purple-700"></i>
                    <i class="fab fa-google-plus-g text-pink-700"></i>
                </div>
            </div>
            <div class="flex place-content-center">
                {{$blogs->links()}}
            </div>
            
<!--comment post-->
        </div><!--end of first half-->
        <div class="md:w-4/12">
            @auth
            <div class="create-blog-section bg-pink-600 py-2 px-3 text-center text-white font-semibold text-lg  mt-6 rounded">
            <a href="{{ route('create') }}">
                    <button type="submit" class="">Create Your Blog Now</button>
                </a>
            </div>
            @endauth
            <div class="search-section mt-6">
                <h1 class="text-2xl font-semibold">Search</h1>
                <form action="{{ route('search') }}" method="GET">
                <div class="relative flex  flex-wrap items-stretch mt-4 mb-3 text-gray-400">
                    <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="px-3 py-2 placeholder-blueGray-300 text-blueGray-600 relative bg-white  rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:ring w-full pr-10" placeholder="Search For Posts" autocomplete="off"/>
                    <span class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300  bg-transparent rounded text-base items-center justify-center w-8 right-0 pr-3 py-1">
                        <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                    </span>
                </div>
                </form>
            </div>
            <div class="recent-post-section mt-10">
                <h1 class="text-2xl font-semibold mb-3">Recent Posts</h1>
                <div class="grid gap-y-8">
                    @foreach (App\Models\Blog::orderBy('creation_date', 'DESC')->get()->take(3) as $blog)
                        <div class="flex space-x-4">
                            <div class="w-20">
                                <img src="{{asset('img/'.$blog->photo)}}" class="h-20">
                            </div>
                            <div class="">
                                <h1>{{$blog->title}}</h1>
                                <p class="text-gray-400 text-sm">{{ $blog->creation_date }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="sale-product-section mt-10">
                <h1 class="text-2xl font-semibold mb-3">Sale Products</h1>
                <div class="grid gap-y-8">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="flex space-x-4">
                            <div class="w-20">
                                <img src="img/lr1.png">
                            </div>
                            <div class="">
                                <h1>Popular Versalis Raincoat</h1>
                                <p class="text-gray-400 text-sm">$12.00-15.00$</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="offer-product-section mt-10">
                <h1 class="text-2xl font-semibold mb-3">Offer Product</h1>
                <div class="grid grid-cols-2 gap-x-10 gap-y-8">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="flex flex-col gap-y-1">
                            <img src="img/post1.png">
                            <div class="grid  place-content-center">
                                <h1>Handy Crafting</h1>
                                <p class="text-gray-400 text-sm">$12.00-15.00$</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="follow-section mt-10">
                <h1 class="text-2xl font-semibold mb-3">Follow</h1>
                <div class="w-60 shadow">
                    <div class="flex space-x-10 py-3 px-3 ">
                        <i class="fab fa-facebook text-blue-700"></i>
                        <i class="fab fa-twitter text-blue-400"></i>
                        <i class="fab fa-instagram text-purple-700"></i>
                        <i class="fab fa-google-plus-g text-pink-700"></i>
                    </div>
                </div>
            </div>
            <div class="tag-section mt-10">
                <h1 class="text-2xl font-semibold mb-3">Tags</h1>
                <div class="grid grid-cols-3 gap-y-2">
                    <div class="underline text-indigo-700">General</div>
                    <div class="underline text-indigo-700">Ecommerce</div>
                    <div class="underline text-indigo-700">Shopify</div>
                    <div class="underline text-indigo-700">Jquery</div>
                    <div class="underline text-indigo-700">UUI Design</div>
                </div>
            </div>
        </div>
    </div>
    <div class="place-content-center py-3 pt-11 pb-6 2xl:pt-28 2xl:pb-20 ">
        <img src="img/sponsor.png"  class="w-full">
    </div>
</div>
@endsection