@extends('admin.layout.app')

@section('content')
    <div class="d-flex justify-content-between">

        <h3>Portfolio</h3>

        <a href="/admin/portfolio/create" class="btn btn-primary">
            Add Project
        </a>

    </div>

    @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">

        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Action</th>
        </tr>

        @foreach ($portfolios as $portfolio)
            <tr>

                <td>
                    <img src="{{ asset('storage/' . $portfolio->image) }}" width="80">
                </td>

                <td>{{ $portfolio->title }}</td>

                <td>

                    <a href="/admin/portfolio/delete/{{ $portfolio->id }}" class="btn btn-danger btn-sm">
                        Delete
                    </a>

                </td>

            </tr>
        @endforeach

    </table>
@endsection
