@extends('layouts.app')

@section('content')
    <div class="w-full py-16 px-16 flex flex-col items-center justify-between lg:mb-2">
        <div class="w-full flex justify-between">
            <div class="flex flex-col mr-16 ">
                <h1 class="font-bold text-3xl sm:text-4xl leading-tight mb-2 text-center sm:text-left">Selamat datang admin</h1>
                <p class="text-gray-700 text-base text-center sm:text-left">
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
        <div id="card-searcher" class="w-full" isadmin='@php echo $isAdmin @endphp' data='@php echo $data @endphp'></div>
    </div>
@endsection
