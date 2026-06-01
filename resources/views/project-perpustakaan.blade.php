@extends('layouts.app')

@section('content')

.project-detail {
padding-top: 100px;
padding-bottom: 80px;
}

<div class="container py-5">

    <h1 class="mb-4">
        Perpustakaan Sederhana
    </h1>

    <div class="row">

        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/projects/perpus1.png') }}"
                class="img-fluid rounded shadow">
        </div>

        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/projects/perpus2.png') }}"
                class="img-fluid rounded shadow">
        </div>

        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/projects/perpus3.png') }}"
                class="img-fluid rounded shadow">
        </div>

    </div>

    <h3 class="mt-4">
        Deskripsi
    </h3>

    <p>
        Website Perpustakaan Sederhana merupakan proyek latihan
        yang dibuat menggunakan HTML dan CSS untuk memahami dasar-dasar
        pengembangan web. Website ini menampilkan informasi buku/peminjaman,
        form buku/peminjaman, serta tata letak sederhana yang dirancang
        untuk memberikan pengalaman belajar dalam membangun struktur halaman web.
    </p>

    <h3>
        Teknologi
    </h3>

    <span class="badge bg-primary">HTML</span>
    <span class="badge bg-success">CSS</span>

</div>

<a href="/#projects" class="btn btn-outline-dark mb-4">
    ← Kembali ke Project
</a>

@endsection