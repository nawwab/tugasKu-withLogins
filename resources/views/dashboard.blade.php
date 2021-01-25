@extends('layouts.app')

@section('content')
<main class="flex justify-center">
    <div class="w-full md:w-8/12 px-4 py-8">
        <div class="flex flex-col sm:flex-row w-full justify-between items-center">
            <div class="flex flex-col flex-1 sm:mr-8">
                <h1 class="font-bold text-2xl sm:text-4xl leading-tight mb-2 text-center sm:text-left">Selamat datang {{Auth::user()->name}}</h1>
                <p class="hidden sm:block text-gray-700 text-base text-center sm:text-left ">
                    Buat, Teliti, Perbarui, dan Hapus tugas-tugas disini.
                </p>
            </div>
            <a href="{{ route('homework.create') }}" class="flex flex-row sm:flex-col items-center">
                <svg class="w-12 h-12 mr-4 stroke-current text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clipRule="evenodd"></path>
                </svg>
                <span>Buat Tugas Baru</span>
            </a>
        </div>
        <div id="card-searcher" isadmin='@php echo $isAdmin @endphp' data='@php echo $data @endphp'></div>
    </div>
</main>
@endsection
