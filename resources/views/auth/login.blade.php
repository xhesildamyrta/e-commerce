@extends('layouts.app')
@section('content')
 @if(session()->has('success_message')) 
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold"> {{ session()->get('success_message') }}</p>
        </div>
    @endif
<div class="flex items-center justify-center py-4 bg-gray-100">
    <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        <div class="flex justify-center">
             <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="w-20 h-20 text-pink-600 bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </div>
        <h3 class="text-2xl font-bold text-center">Login to your account</h3>
        @if(session()->has('fail_message')) 
        <div class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3" role="alert" id="alert">
             {{ session()->get('fail_message') }}
        </div>
        @endif
        <form method="POST" action="{{ route('login.user') }}">
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Email<label>
                    <input type="text" placeholder="Email" id="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-pink-300" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-red-500">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                    <input type="password" placeholder="Password" id="password" name="password" class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-pink-300" required>
                    @if ($errors->has('password'))
                    <span class="text-red-500">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="flex items-baseline justify-between">
                    <button class="px-6 py-2 mt-4 text-white bg-pink-600 rounded-lg hover:bg-pink-00">Login</button>
                    <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection