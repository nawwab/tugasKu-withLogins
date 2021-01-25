@extends('layouts.app')

@section('content')
<main class="flex justify-center">
    <div class="max-w-4xl px-4 py-8">
        <div class="flex mb-4 md:mb-8 items-center">
            <svg class="w-8 h-8 md:w-12 md:h-12 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
            </svg>
            <h1 class="text-4xl md:text-6xl font-semibold">
                Help
            </h1>
        </div>
        <h2 class="text-xl md:text-2xl font-semibold mb-2 md:mb-4">Apa yang kamu butuhkan dalam satu halaman</h2>
        <p class="text-xl mb-2">
            Fitur utama pada aplikasi <strong>TugasKu</strong> tepusat pada landing page pertama yang terlihat ketika anda pertama kali mengunjungi aplikasi ini, cukup ketik apa yang anda cari dan atur kelas sesuai dengan matkul dari tugas tersebut.
        </p>
        <p class="text-xl mb-8">
            Ketika anda mulai mengetik, beberapa kartu seperti dibawah ini akan muncul:
        </p>
        @php
            $data = array(
                'abbrev' => 'Matkul',
                'deadline_date' => '2021-01-26',
                'deadline_time' => '2021-01-26',
                'group' => 'B',
                'source' => 'https://learning.uin-suka.ac.id/dashboard#title-act',
                'subject' => 'Mata Kuliah',
                'user_id' => 1,
                'details' => 'Ini adalah salah satu contoh kartu, semua detail tugas ditulis disini',
                'file_attachments' => null
            );
            $data = json_encode($data);
        @endphp
        <div id="card-react" class="w-full" data='@php echo $data @endphp'></div>
        <p class="text-xl mt-8 mb-2">
            Pada kartu diatas, terdapat berbagai informasi seperti (dari atas ke bawah):
        </p>
        <ul class="text-xl list-disc mb-8">
            <li>Tanggal dan waktu deadline</li>
            <li>Singkatan, kelas, dan nama panjang dari mata kuliah</li>
            <li>Terdapat ikon yang terletak di paling kanan yang berguna sebagai pintasan ke website tempat pengumpulan</li>
            <li>Detail dan file lampiran</li>
        </ul>
        <h2 class="text-xl md:text-2xl font-semibold mb-2 md:mb-4">Kontributor</h2>
        <p class="text-xl mb-8">
            Untuk saat ini pendaftaran kontributor masih terbatas dan tidak dibuka secara umum. Jika anda tertarik secara sukarela untuk ikut serta dalam pengembangan aplikasi ataupun sebagai pengepul informasi tugas, silahkan hubungi kontributor jika ingin berkontribusi pada projek ini.
        </p>
        <h2 class="text-xl md:text-2xl font-semibold mb-2 md:mb-4">Data tidak ditemukan</h2>
        <p class="text-xl mb-2">
            data tidak ditemukan dapat disebabkan oleh beberapa hal:
        </p>
        <ul class="text-xl list-disc mb-8">
            <li>Admin/kontributor belum memasukkan data, silahkan menghubungi kontributor jika mendapati masalah ini</li>
            <li>Karena keterbatasan kontributor, tidak semua mata kuliah pada kelas atau semester tertentu dapat diberikan disini</li>
            <li>Tugas dianggap selesai dan dihapus oleh admin/kontributor</li>
        </ul>
    </div>
</main>
@endsection
