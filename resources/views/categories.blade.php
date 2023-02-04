@extends('layouts.app')
@section('content')
    <x-page-indicator page="Categories" />
    <div class="container mx-auto px-4 mt-16 xl:px-32  xl:mt-28">
        {{-- @dd($categories) --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-5 gap-y-6 xl:gap-x-20 xl:gap-y-12 mt-10">
            @foreach ($categories as $category)
            <a href="{{route('category.show',$category->id)}}" class="cursor-pointer">
                <div class="flex flex-col">
                    <img src="{{asset('img/'.$category->photo)}}" class="h-20">
                    <div class="text-center uppercase">{{ $category->name }}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection
