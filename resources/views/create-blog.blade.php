@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 pt-8 xl:px-32">
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
 <section class="max-w-4xl bg-white rounded-md :bg-gray-800 ">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Create Your Blog Now</h2>
    <form action="{{ route('create-blog') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 ">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 place-content-center">
                <div>
                    <label class="block text-sm font-medium text-gray-600">Image</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <img id="myImg" alt="blog image" width="100" height="100" />
                    </div>
                    <input type="file" name="image" onchange="document.getElementById('myImg').src = window.URL.createObjectURL(this.files[0])">
                </div>
                <div class="mt-1 pt-5 pb-6">
                    <input  type="text" name="blog_img" placeholder="Enter Image URL" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <input  type="text" name="blog_video" placeholder="Enter Video URL" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200 " for="title" >Blog Title</label>
                <input id="title" type="text" name="blog_title" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="textarea">Blog Content</label>
                <textarea id="textarea" type="textarea" name="blog_content" rows="10" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
        </div>
        <div class="flex justify-end mt-6 pb-3">
            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-600 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</section>
</div>
@endsection