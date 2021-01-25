@extends('layouts.app')

@section('content')
<div class="w-full py-16 px-16 flex flex-col items-center lg:mb-2">
    <h1 class="font-bold text-4xl leading-tight mb-2 text-center">Temukan tugasmu dengan Mudah.</h1>
    <p class="text-gray-700 text-base text-center">
        kami para kontributor menyatukan semua tugas Teknik Informatika yang terpencar
        dari beberapa website pembelajaran Universitas Islam Negeri Sunan Kalijaga.
    </p>

    <div id="card-searcher" class="w-full" data='@php echo $data @endphp'></div>
</div>
@endsection

