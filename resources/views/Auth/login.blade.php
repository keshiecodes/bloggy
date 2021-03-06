@extends('layouts.app')

@section('content')
<div class="flex justify-center">
 <div class="w-4/12 bg-white p-6 rounded-lg ">
  @if (session('status'))
  <div class="text-red-400 rounded text-center mb-2 bg-red-100 border-red-100 p-3">
   {{session('status')}}
  </div>
  @endif
  <form action="{{ route('login') }}" method="POST">
   @csrf
   @method('post')

   <div class="mb-4">
    <label for="email" class="sr-only">email</label>
    <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
    @error('email')
    <div class="text-red-500 mt-2 text-sm">
     {{ $message }}
    </div>
    @enderror
   </div>

   <div class="mb-4">
    <label for="password" class="sr-only">password</label>
    <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">
    @error('password')
    <div class="text-red-500 mt-2 text-sm">
     {{ $message }}
    </div>
    @enderror
   </div>

   <div class="mb-4">
    <input type="checkbox" name="remember" class="mr-2" id="remember">
    <label for="remember">Remember me</label>
   </div>

   <div>
    <button class="bg-blue-500 text-center px-4 py-4 rounded font-medium w-full">Login</button>
   </div>
  </form>
 </div>
 @endsection