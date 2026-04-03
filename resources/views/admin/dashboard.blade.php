@extends('admin.layout.app')

@section('content')
    <h3>Dashboard</h3>

    <div class="row mt-4">

        <div class="col-md-4">

            <div class="card dashboard-card p-3">
                <i class="bi bi-gear fs-3 text-primary"></i>
                <h5>Total Services</h5>
                <h3>{{ $totalServices }}</h3>
            </div>

        </div>


        <div class="col-md-4">

            <div class="card dashboard-card p-3">
                <h5>Total Projects</h5>
                <h3>{{ $totalProjects }}</h3>
            </div>

        </div>


        <div class="col-md-4">

            <div class="card dashboard-card p-3">
                <h5>Contact Leads</h5>
                <h3>{{ $totalContacts }}</h3>
            </div>

        </div>

    </div>
@endsection
