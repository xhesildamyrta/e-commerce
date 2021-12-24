@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 pt-8 xl:px-32">
    <h1 class="text-2xl font-semibold">Post Comment</h1>
    <form action="{{ route('post-comment') }}" method="POST">
        @csrf
        <div class="flex flex-col gap-y-3 md:w-10/12 mt-6">
            <div class="flex flex-col md:flex md:flex-row gap-x-8">
                <div class="relative flex w-full flex-wrap items-stretch mb-3">
                    <span class="z-10 h-full leading-snug font-normal  text-center  absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-2.5">
                        <i class="fas fa-user text-gray-400"></i>
                    </span>
                    <input type="text" placeholder="Yor Name*" name="author_name" class="px-3 py-2.5   relative bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:ring w-full pl-10"/>
                </div>
                <div class="relative flex w-full flex-wrap items-stretch mb-3">
                    <span class="z-10 h-full leading-snug font-normal  text-center  absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-2.5">
                        <i class="fas fa-envelope text-gray-400"></i>
                    </span>
                    <input type="text" placeholder="Write Your Email*" name="author_email" class="px-3 py-2.5   relative bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:ring w-full pl-10"/>
                </div>
            </div>
            <div class="">
                <textarea name="author_comment" class="resize-none rounded-md border border-blueGray-300 outline-none focus:outline-none focus:ring w-full px-3 pt-3 " rows="7" placeholder="Write Comment*"></textarea>
            </div>
            <div class="flex place-items-center space-x-4 text-gray-400">
                <input type="checkbox">
                <p>Save my name, email and website in this browser for the next time I comment. </p>
            </div>
            <div class=" bg-pink-600 py-2 px-3 text-center text-white font-semibold text-lg mt-6 rounded w-40 mb-8">
                <button type="submit" class="">Post Comment</button>
            </div>
        </div>
    </form>
</div>
@endsection