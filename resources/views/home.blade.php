@extends('layouts.app')

@section('content')

<style>
    .hero {
        min-height: 1vh;
        padding: 80px 0 40px;
        display: flex;
        align-items: center;
        background: #f8f9fa;
        padding-left: 200px;
    }

    .profile-img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid white;
        box-shadow: 0 10px 25px rgba(0, 0, 0, .1);

    }

    .about-section {
        margin-top: -30px;
        position: relative;
        z-index: 2;
    }

    .about-card {
        background: white;
        padding: 35px;
        border-radius: 30px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
    }

    .skill-card {
        background: white;
        padding: 30px;
        border-radius: 20px;
        height: 100%;
        box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
        transition: .3s;
    }

    .skill-card:hover {
        transform: translateY(-8px);
    }

    .skill-card h4 {
        font-size: 1.2rem;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .skill-card p {
        color: #6c757d;
        margin-bottom: 0;
        line-height: 1.7;
    }

    .project-card img {
        height: 220px;
        object-fit: cover;
    }

    .about-card {
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
    }

    .about-card h2 {
        text-align: center;
        margin-bottom: 25px;
        font-weight: 700;
    }

    .about-card p {
        text-align: justify;
        line-height: 1.8;
    }
</style>

<section id="home" class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-2 text-center">

                <img src="{{ asset('images/profile.jpg') }}"
                    class="profile-img">

            </div>

            <div class="col-md-6">

                <h1 class="display-5 fw-bold">
                    Rizka Wahyuni
                </h1>

                <p class="lead">
                    Informatics Student • Web Developer
                </p>

                <a href="#projects" class="btn btn-primary">
                    Lihat Project
                </a>

            </div>



        </div>

    </div>

</section>

<section id="about" class="about-section">

    <div class="container">

        <div class="about-card">


            <h2>About</h2>

            <p>
                Halo, saya Rizka Wahyuni, mahasiswa Teknik Informatika yang memiliki minat pada
                pengembangan website modern dan responsif. Saya berpengalaman menggunakan
                HTML, CSS, JavaScript, PHP, Laravel, dan CMS untuk membangun aplikasi web yang
                fungsional dan mudah digunakan.

                Saya senang mempelajari teknologi baru, mengembangkan proyek berbasis web,
                serta terus meningkatkan kemampuan teknis melalui pembelajaran dan praktik langsung.
                Saat ini, saya berfokus untuk berkembang sebagai Web Developer dan menciptakan solusi
                digital yang bermanfaat.

            </p>



        </div>

    </div>
</section>

<section id="skills" class="py-5">

    <div class="container">

        <h2 class="text-center mb-5">
            Skills & Tools
        </h2>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="skill-card">
                    <h4>Frontend Development</h4>
                    <p>
                        HTML, CSS, Bootstrap
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="skill-card">
                    <h4>Backend Development</h4>
                    <p>
                        PHP, Laravel,
                        CodeIgniter 4
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="skill-card">
                    <h4>Database</h4>
                    <p>
                        MySQL
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <h4>Content Management System</h4>
                    <p>
                        WordPress
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="skill-card">
                    <h4>Tools </h4>
                    <p>
                        Visual Studio Code,
                        GitHub,
                        XAMPP
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<section id="projects" class="py-5 bg-light">

    <div class="container">

        <h2 class="text-center mb-5">
            Projects
        </h2>

        <div class="row">

            <div class="col-md-6 mb-4">

                <div class="card project-card">

                    <img src="{{ asset('images/projects/iot.jpg') }}"
                        class="card-img-top">

                    <div class="card-body">

                        <h5>Perpustakaan Sederhana</h5>

                        <p>

                        </p>

                        <a href="/project/perpustakaan"
                            class="btn btn-outline-primary mt-2">
                            Lihat Detail
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">

                <div class="card project-card">

                    <img src="{{ asset('images/projects/webprodi.jpg') }}"
                        class="card-img-top">

                    <div class="card-body">

                        <h5>Aplikasi Komik CRUD</h5>

                        <p>

                        </p>

                        <a href="/project/komik"
                            class="btn btn-outline-primary mt-2">
                            Lihat Detail
                        </a>

                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<section id="contact" class="py-5">

    <div class="container text-center">

        <h2>Contact Me</h2>

        <p>https://id.linkedin.com/in/rizka-undefined-05a15a35b</p>

        <p>https://github.com/rizka22-lang</p>

    </div>

</section>

@endsection