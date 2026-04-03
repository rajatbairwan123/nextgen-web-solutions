@extends('admin.layout.app')

@section('content')
    <h3>Add Project</h3>

    <form action="/admin/portfolio/store" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Project Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Project URL</label>
            <input type="text" name="project_url" class="form-control">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
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
