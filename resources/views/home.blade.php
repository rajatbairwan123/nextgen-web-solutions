@extends('layouts.app')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">

                    <span class="badge bg-primary mb-3">
                        NextGen Web Solutions
                    </span>

                    <h1>
                        We Build Modern Websites &
                        <span class="text-primary">Scalable Web Applications</span>
                    </h1>

                    <p>
                        Helping startups, businesses, and students build professional
                        websites and powerful web applications.
                    </p>

                    <div class="mt-4">

                        <a href="/contact" class="btn btn-primary btn-lg me-2">
                            Start Project
                        </a>

                        <a href="/portfolio" class="btn btn-outline-dark btn-lg">
                            View Work
                        </a>

                    </div>

                </div>

                <div class="col-md-6 text-center">

                    <img src="https://cdn.dribbble.com/users/1162077/screenshots/3848914/programmer.gif"
                        class="img-fluid hero-img">

                </div>

            </div>
        </div>
    </section>

    <section class="py-4 bg-light">

        <div class="container">

            <div class="row text-center">

                <div class="col-md-3">
                    <h4>10+</h4>
                    <p>Projects Completed</p>
                </div>

                <div class="col-md-3">
                    <h4>5+</h4>
                    <p>Happy Clients</p>
                </div>

                <div class="col-md-3">
                    <h4>2+</h4>
                    <p>Years Experience</p>
                </div>

                <div class="col-md-3">
                    <h4>100%</h4>
                    <p>Client Satisfaction</p>
                </div>

            </div>

        </div>

    </section>

    <section class="services-section py-5">

        <div class="container">

            <div class="text-center mb-5">
                <h2>Our Services</h2>
                <p>We provide complete web development solutions</p>
            </div>

            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="service-card">

                        <h5>Portfolio Websites</h5>

                        <p>
                            Professional portfolio websites for students
                            and professionals.
                        </p>

                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="service-card">

                        <h5>Business Websites</h5>

                        <p>
                            Modern responsive websites for businesses.
                        </p>

                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="service-card">

                        <h5>Web Applications</h5>

                        <p>
                            Custom web apps built with Laravel and PHP.
                        </p>

                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
