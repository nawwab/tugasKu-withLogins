@extends('layouts.app')

@section('content')
<main class="flex justify-center">
    <div class="max-w-4xl px-4 py-8">
        <h1 class="font-bold text-4xl leading-tight mb-2 text-center">Temukan tugasmu dengan Mudah.</h1>
        <p class="text-gray-700 text-base text-center   ">
            kami para kontributor menyatukan semua tugas Teknik Informatika yang terpencar
            dari beberapa website pembelajaran Universitas Islam Negeri Sunan Kalijaga.
        </p>
        <div id="card-searcher" class="w-full" data='@php echo $data @endphp'></div>
    </div>
</main>
@endsection

