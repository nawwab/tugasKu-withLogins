@extends('layouts.app')

@section('content')
<div class="w-full py-4 px-4 flex flex-col items-center lg:mb-2">
    <div class="bg-white rounded p-8">
        <h1 class="text-2xl mb-4">Register</h1>
        <form action="{{ route('register') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="name" class="mb-2">
                    <span class="@error('name') hidden @enderror">
                        Name
                    </span>
                    @error('name')
                        <span class="text-red-600">
                            {{ $message }}
                        </span>
                    @enderror
                </label>
                <input type="text" name="name" id="name" placeholder="Your Name"
                class="p-2 rounded border @error('name') border-red-600 @enderror w-full bg-gray-100"
                value="{{ old('name') }}">
            </div>

            <div class="mb-4">
                <label for="email" class="mb-2">
                    <span class="@error('email') hidden @enderror">
                        E-mail
                    </span>
                    @error('email')
                        <span class="text-red-600">
                            {{ $message }}
                        </span>
                    @enderror
                </label>
                <input type="email" name="email" id="email" placeholder="yourName@email.com"
                class="p-2 rounded border @error('email') border-red-600 @enderror w-full bg-gray-100"
                value="{{ old('email') }}">
            </div>
            <div class="mb-4">
                <label for="password" class="mb-2">
                    <span class="@error('password') hidden @enderror">
                        Password
                    </span>
                    @error('password')
                        <span class="text-red-600">
                            {{ $message }}
                        </span>
                    @enderror
                </label>
                <input type="password" name="password" id="password" placeholder="Choose a password"
                class="p-2 rounded border @error('password') border-red-600 @enderror w-full bg-gray-100">
            </div>
            <div class="mb-8">
                <label for="password_confirmation" class="mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Type your password again"
                class="p-2 rounded border w-full bg-gray-100">
            </div>

            <div class="">
                <button class="w-full p-4 text-white bg-blue-500 rounded" type="submit">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
