@extends('admin.layout.app')

@section('content')
    <div class="d-flex justify-content-between">

        <h3>Services</h3>

        <a href="/admin/services/create" class="btn btn-primary">
            Add Service
        </a>

    </div>

    @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">

        <tr>
            <th>Title</th>
            <th>Icon</th>
            <th>description</th>
            <th>Action</th>
        </tr>

        @foreach ($services as $service)
            <tr>

                <td>{{ $service->title }}</td>
                <td>{{ $service->icon }}</td>
                <td>{{ $service->description }}</td>

                <td>

                    <a href="/admin/services/edit/{{ $service->id }}" class="btn btn-sm btn-warning">
                        Edit
                    </a>

                    <a href="/admin/services/delete/{{ $service->id }}" class="btn btn-sm btn-danger">
                        Delete
                    </a>

                </td>

            </tr>
        @endforeach

    </table>
@endsection
