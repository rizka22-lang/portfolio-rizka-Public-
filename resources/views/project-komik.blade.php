@extends('layouts.app')

@section('content')

.project-detail {
padding-top: 100px;
padding-bottom: 80px;
}

<div class="container py-5">

    <h1 class="mb-4">
        Aplikasi Komik CRUD
    </h1>

    <div class="row">

        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/projects/komik1.png') }}"
                class="img-fluid rounded shadow">
        </div>

        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/projects/komik2.png') }}"
                class="img-fluid rounded shadow">
        </div>

        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/projects/komik3.png') }}"
                class="img-fluid rounded shadow">
        </div>

    </div>

    <h3 class="mt-4">
        Deskripsi
    </h3>

    <p>
        Aplikasi Komik CRUD merupakan aplikasi web yang dibangun menggunakan
        CodeIgniter 4 untuk mengelola data komik. Sistem ini menerapkan fitur
        Create, Read, Update, dan Delete (CRUD) serta menggunakan Bootstrap
        untuk menghasilkan tampilan yang responsif dan mudah digunakan.
    </p>

    <h3>
        Teknologi
    </h3>

    <span class="badge bg-primary">PHP</span>
    <span class="badge bg-success">CodeIgniter 4</span>
    <span class="badge bg-dark">Bootstrap</span>
    <span class="badge bg-secondary">MySQL</span>

</div>

<a href="/#projects" class="btn btn-outline-dark mb-4">
    ← Kembali ke Project
</a>

@endsection