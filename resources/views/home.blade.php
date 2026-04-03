@extends('layouts.app')

@section('content')
    <section class="hero-section gradient-bg">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <h1 class="hero-title">
                        Build Modern Websites &
                        Scalable Web Applications
                    </h1>

                    <p class="hero-subtitle">
                        NextGen Web Solutions helps startups, businesses, and students
                        build fast, modern and scalable digital solutions.
                    </p>

                    <div class="hero-buttons mt-4">

                        <a href="/contact" class="btn btn-light btn-lg me-3">
                            Start Your Project
                        </a>

                        <a href="/portfolio" class="btn btn-outline-light btn-lg">
                            View Portfolio
                        </a>

                    </div>

                    <div class="hero-stats mt-5">

                        <div class="row">

                            <div class="col-4">
                                <h4>10+</h4>
                                <p>Projects</p>
                            </div>

                            <div class="col-4">
                                <h4>5+</h4>
                                <p>Clients</p>
                            </div>

                            <div class="col-4">
                                <h4>100%</h4>
                                <p>Satisfaction</p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 text-center">

                    <img src="{{ asset('images/hero/tech-company-amico.png') }}" class="img-fluid hero-image">

                </div>

            </div>

        </div>

    </section>


    {{-- Service Section --}}

    <section class="services-section section-padding">

        <div class="container">

            <div class="text-center mb-5">
                <h2>Our Services</h2>
                <p class="section-subtitle">
                    We provide complete web development solutions
                </p>
            </div>

            <div class="row">

                @foreach ($services as $service)
                    <div class="col-md-4 mb-4">

                        <div class="card-modern text-center">

                            <i class="{{ $service->icon }} service-icon"></i>

                            <h5>{{ $service->title }}</h5>

                            <p>
                                {{ $service->description }}
                            </p>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

    {{-- About Section --}}

    <section class="about-section section-padding">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <img src="{{ asset('images/hero/hero-section-img-worktime.png') }}" class="img-fluid about-image">

                </div>

                <div class="col-md-6">

                    <h2>About NextGen Web Solutions</h2>

                    <p>
                        We help businesses, startups, and individuals build modern,
                        scalable and high-performance websites and web applications.
                    </p>

                    <p>
                        With experience in Laravel, PHP, MySQL, and modern frontend
                        technologies, we deliver professional solutions tailored
                        to client needs.
                    </p>

                    <div class="row mt-4">

                        <div class="col-6">

                            <h4>10+</h4>
                            <p>Projects Completed</p>

                        </div>

                        <div class="col-6">

                            <h4>5+</h4>
                            <p>Happy Clients</p>

                        </div>

                    </div>

                    <a href="/about" class="btn btn-primary mt-3">
                        Learn More
                    </a>

                </div>

            </div>

        </div>

    </section>

    {{-- Portfolio Section --}}

    <section class="portfolio-section section-padding">

        <div class="container">

            <div class="text-center mb-5">

                <h2>Our Portfolio</h2>

                <p class="section-subtitle">
                    Some of our recent projects and work
                </p>

            </div>

            <div class="row">

                <!-- Project 1 -->

                <div class="col-md-4 mb-4">

                    <div class="portfolio-card">

                        <img src="{{ asset('images/portfolio/travel.png') }}" class="img-fluid">

                        <div class="portfolio-content">

                            <h5>Business Website</h5>

                            <p>Modern responsive business website</p>

                        </div>

                    </div>

                </div>


                <!-- Project 2 -->

                <div class="col-md-4 mb-4">

                    <div class="portfolio-card">

                        <img src="{{ asset('images/portfolio/Portfolio.png') }}" class="img-fluid">

                        <div class="portfolio-content">

                            <h5>Portfolio Website</h5>

                            <p>Professional portfolio for developer</p>

                        </div>

                    </div>

                </div>


                <!-- Project 3 -->

                <div class="col-md-4 mb-4">

                    <div class="portfolio-card">

                        <img src="{{ asset('images/portfolio/groco-ecom.png') }}" class="img-fluid">

                        <div class="portfolio-content">

                            <h5>Web Application</h5>

                            <p>Custom Laravel web application</p>

                        </div>

                    </div>

                </div>

            </div>


            <div class="text-center mt-4">

                <a href="/portfolio" class="btn btn-outline-primary">
                    View All Projects
                </a>

            </div>

        </div>

    </section>

    {{-- CTA Section --}}
    <section class="cta-section gradient-bg section-padding">

        <div class="container text-center">

            <h2 class="cta-title">
                Have a Project in Mind?
            </h2>

            <p class="cta-subtitle">
                Let's build something amazing together.
                We help startups and businesses build modern web solutions.
            </p>

            <div class="mt-4">

                <a href="/contact" class="btn btn-light btn-lg me-3">
                    Start Your Project
                </a>

                <a href="/services" class="btn btn-outline-light btn-lg">
                    View Services
                </a>

            </div>

        </div>

    </section>

    {{-- Contact Section --}}
    <section class="contact-section section-padding">

        <div class="container">

            <div class="text-center mb-5">
                <h2>Contact Us</h2>
                <p class="section-subtitle">
                    Let's discuss your project
                </p>
            </div>

            <div class="row">

                <div class="col-md-6">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">

                        @csrf

                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>

                        <div class="mb-3">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>

                        <div class="mb-3">
                            <textarea name="message" class="form-control" rows="5" placeholder="Your Message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Send Message
                        </button>

                    </form>

                </div>


                <div class="col-md-6">

                    <div class="contact-info">

                        <h5>Contact Information</h5>

                        <p>
                            <i class="bi bi-envelope"></i> info@nextgenwebsolutions.com
                        </p>

                        <p>
                            <i class="bi bi-phone"></i> +91 XXXXX XXXXX
                        </p>

                        <p>
                            <i class="bi bi-geo-alt"></i> India
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
