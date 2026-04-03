@extends('admin.layout.app')

@section('content')
    <h3>Contact Leads</h3>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">

        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        @foreach ($contacts as $contact)
            <tr>

                <td>{{ $contact->name }}</td>

                <td>{{ $contact->email }}</td>

                <td>{{ $contact->phone }}</td>

                <td>{{ $contact->message }}</td>

                <td>{{ $contact->created_at->format('d M Y') }}</td>

                <td>

                    <a href="/admin/contacts/delete/{{ $contact->id }}" class="btn btn-danger btn-sm">
                        Delete
                    </a>

                </td>

            </tr>
        @endforeach

    </table>
@endsection
