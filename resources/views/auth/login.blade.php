@extends('layouts.app')

@section('content')
<main class="flex justify-center">
    <div class="w-full md:w-4/12 px-4 py-8">
        <h1 class="text-2xl mb-4">Login</h1>
        @if (session()->has('status'))
            <div class="w-full p-2 text-white bg-red-500 rounded mb-4 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="email" class="sr-only">E-mail</label>
                <input type="email" name="email" id="email" placeholder="yourName@email.com"
                class="p-2 rounded border @error('email') border-red-600 @enderror w-full bg-gray-100"
                value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Choose a password"
                class="p-2 rounded border @error('password') border-red-600 @enderror w-full bg-gray-100">
                @error('password')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="remember">
                    <input class="mr-2" type="checkbox" name="remember" id="remember">
                    Remember me
                </label>
            </div>

            <div class="">
                <button class="w-full p-4 text-white bg-blue-500 rounded" type="submit">Login</button>
            </div>
        </form>
    </div>
</main>
@endsection
