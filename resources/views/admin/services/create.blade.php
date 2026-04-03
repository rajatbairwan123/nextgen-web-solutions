@extends('admin.layout.app')

@section('content')
    <h3>Add Service</h3>

    <form action="/admin/services/store" method="POST">

        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Icon</label>
            <input type="text" name="icon" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">
            Save
        </button>

    </form>
@endsection
