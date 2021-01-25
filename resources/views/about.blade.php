@extends('layouts.app')

@section('content')
<main class="flex justify-center">
    <div class="max-w-4xl px-4 py-8">
        <div class="flex mb-4 md:mb-8 items-center">
            <svg class="w-8 h-8 md:w-12 md:h-12 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            </svg>
            <h1 class="text-4xl md:text-6xl font-semibold">
                About
            </h1>
        </div>
        <p class="text-xl mb-2">
            <strong>TugasKu</strong> adalah aplikasi sistem informasi yang mencoba untuk menyatukan seluruh tugas yang mana akses informasinya terpencar dan terpisah pada beberapa website seperti: <a class="underline text-blue-500" href="https://learning.uin-suka.ac.id/">E-learning</a>, <a class="underline text-blue-500" href="https://lms.uin-suka.ac.id/">Website LMS</a>, <a class="underline text-blue-500" href="https://classroom.google.com/">Google Classroom</a>, grup chat Whatsapp, dan masih banyak lagi.
        </p>
        <p class="text-xl mb-4  ">
            Seluruh data tugas pada website ini dibuat dan dikumpulkan oleh beberapa relawan yang terdaftar dalam suatu komunitas dari berbagai angkatan
        </p>
        <h2 class="text-xl md:text-2xl font-semibold mb-2 md:mb-4">Kontributor</h2>
        <div class="flex flex-wrap justify-center items-stretch">
            <img class="rounded-full mt-4 w-12 h-12 md:w-24 md:h-24 mr-2" src="{{ asset('image/nawwab.png') }}" alt="nawwab" />
            <img class="rounded-full mt-4 w-12 h-12 md:w-24 md:h-24 mr-2" src="{{ asset('image/fayyadh.png') }}" alt="fayyadh" />
            <img class="rounded-full mt-4 w-12 h-12 md:w-24 md:h-24 mr-2" src="{{ asset('image/aldi.png') }}" alt="aldi" />
            <img class="rounded-full mt-4 w-12 h-12 md:w-24 md:h-24 mr-2" src="{{ asset('image/zaini.png') }}" alt="zaini" />
            <img class="rounded-full mt-4 w-12 h-12 md:w-24 md:h-24 mr-2" src="{{ asset('image/farid.png') }}" alt="farid" />
            <a href="/help">
                <div class="cursor-pointer group rounded-full pr-4 mt-4 flex-1 justify-center bg-gray-100 border-1 border-blue-500 hover:bg-blue-500 flex items-center">
                    <svg class="w-12 h-12 md:w-24 md:h-24 stroke-current text-blue-500 mr-1 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-blue-500 text-lg font-semibold group-hover:text-white">Ingin menjadi kontributor?</span>
                </div>
            </a>
        </div>
    </div>
</main>
@endsection
