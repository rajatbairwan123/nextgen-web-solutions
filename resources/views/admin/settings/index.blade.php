@extends('admin.layout.app')

@section('content')
    <h3>Website Settings</h3>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/admin/settings/update" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Site Name</label>
            <input type="text" name="site_name" value="{{ $setting->site_name ?? '' }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Logo</label>
            <input type="file" name="logo" class="form-control">

            @if (!empty($setting->logo))
                <img src="{{ asset('storage/' . $setting->logo) }}" width="120">
            @endif

        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" value="{{ $setting->email ?? '' }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ $setting->phone ?? '' }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" value="{{ $setting->address ?? '' }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Footer Text</label>
            <textarea name="footer_text" class="form-control">{{ $setting->footer_text ?? '' }}</textarea>
        </div>

        <button class="btn btn-primary">
            Save Settings
        </button>

    </form>
@endsection
