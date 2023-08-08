@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-8 md:items-center">
        <div class="md:w-6/12">
            <img src="https://cutewallpaper.org/27/blue-tiger-mac-wallpaper/macos-90849-tiger-8e9bb-%E2%80%94-7c74a-basic-1650a-apple-61289-guy.png" alt="img" height="400">
        </div>
        <div class="md:w-5/12 bg-white p-6 rounded-lg shadow-lg">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Name</label>
                    <input type="text" id="name" name="name" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}" placeholder="Your Name">
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input type="text" id="username" name="username" class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}" placeholder="Your Username">
                    @error('username')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="email" id="email" name="email"  class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}" placeholder="Your Email">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" id="password" name="password"  class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" value="{{ old('password') }}" placeholder="Your Password">
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repeat Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"  class="border p-3 w-full rounded-lg" placeholder="Repeat Password">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full rounded-lg bg-sky-600 hover:bg-sky-700 cursor-pointer uppercase text-white p-3 font-bold">
                    Register
                </button>
            </form>
        </div>
    </div>
@endsection