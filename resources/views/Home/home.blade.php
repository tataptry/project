@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<div class="container mx-auto px-4 mt-6">
    <div class="bg-green-100 shadow-md p-6 rounded-lg text-center">
    <h1 class="text-3xl md:text-xl font-bold text-green-800 md-4">
        Selamat Datang di <span class="text-green-700">SampahBijak</span>
    </h1>
    <p class="text-gray-700 text-base text-center">
        Bersama kita wujudkan lingkungan bersih dan sehat melalui pengelolaan sampah yang bijak dan berkelanjutan.
    </p>
    <button class="ml-6 inline-flex items-center justify-center px-6 py-2 rounded hover:bg-green-600 transition duration-200">
        Pelajari Cara Daur Ulang
    </button>
    </div>
</div>

<!-- Pengelolaan Pengolahan Itu Penting -->
<div class="container mx-auto px-4 mt-10">
    <section class="bg-white shadow-md p-6 rounded-lg">
        <h2 class="text-2xl font-semibold text-green-700">Mengapa Pengelolaan Sampah Itu Penting?</h2>
        <p class="text-gray-700 mb-4">
            Pengelolaan sampah yang baik dapat mengurangi pencemaran lingkungan, menjaga kesehatan masyarakat,
            serta mendukung ekonomi sirkular melalui kegiatan daur ulang dan pengurangan sampah.
        </p>
    </section>
</div>

<!-- Jenis Sampah -->
<div class="container mx-auto px-4 mt-10">
    <section class="bg-green-50 shadow-md p-6 rounded-lg">
        <h2 class="text-2xl font-semibold text-green-700">Jenis Sampah & Cara Mengolahnya</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded shadow text-center">
                <h3 class="font-bold text-green-600 mb-2">Sampah Organik</h3>
                <p class="text-sm text-gray-700">Dapat dijadikan kompos atau bahan biogas alami.</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <h3 class="font-bold text-green-600 mb-2">Sampah Anorganik</h3>
                <p class="text-sm text-gray-700">Bisa didaur ulang menjadi barang baru dan bermanfaat.</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <h3 class="font-bold text-green-600 mb-2">Sampah D3</h3>
                <p class="text-sm text-gray-700">Perlu penanganan khusus karena bersifat berbahaya.</p>
            </div>
        </div>
    </section>
</div>

<!-- Komunitas -->
<div class="container mx-auto px-4 mt-10">
    <section class="bg-white shadow-md p-6 rounded-lg text-center">
        <h2 class="text-2xl font-semibold text-green-700">Bergabung Bersama Komunitas</h2>
        <p class="text-gray-700 mb-4">
            Ikut serta dalam gerakan peduli lingkungan dan menjadi bagian dari perubahan lingkungan yang lebih baik.
        </p>
        <button class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-600 transition duration-200">
            Daftar Sekarang
        </button>
    </section>
</div>
@endsection