@extends('admin.layout.app')

@section('content')
    <h3>Edit Service</h3>

    <form action="/admin/services/update/{{ $service->id }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $service->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Icon</label>
            <input type="text" name="icon" value="{{ $service->icon }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $service->description }}</textarea>
        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>
@endsection
