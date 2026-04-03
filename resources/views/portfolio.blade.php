@extends('layouts.app')

@section('content')

    <section class="portfolio-section section-padding">

        <div class="container">

            <div class="text-center mb-5">

                <h2>Our Portfolio</h2>

                <p class="section-subtitle">
                    Explore our recent projects and work
                </p>

            </div>

            <div class="row">

                @if ($portfolios->count() > 0)
                    @foreach ($portfolios as $portfolio)
                        <div class="col-md-4 mb-4">

                            <div class="portfolio-card">

                                <img src="{{ asset('storage/' . $portfolio->image) }}" class="img-fluid">

                                <div class="portfolio-content">

                                    <h5>{{ $portfolio->title }}</h5>

                                    <p>{{ $portfolio->description }}</p>

                                    @if ($portfolio->project_url)
                                        <a href="{{ $portfolio->project_url }}" target="_blank"
                                            class="btn btn-sm btn-outline-primary mt-2">
                                            View Project
                                        </a>
                                    @endif

                                </div>

                            </div>

                        </div>
                    @endforeach
                @else
                    <div class="text-center">
                        <p>No Projects Found</p>
                    </div>
                @endif

            </div>

        </div>

    </section>

@endsection
