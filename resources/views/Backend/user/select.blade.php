@extends('Backend.back')

@section('admincontent')
    <div>
        <h1>User</h1>
    </div>
    <div>
        <a href="{{ url('admin/user/create') }}" class="btn btn-primary">Add data</a>
        @if (session()->has('pesan'))
            <p class="alert alert-danger">{{ session()->get('pesan') }}</p>
        @endif
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->level }}</td>
                        <td><a href="{{ url('admin/user/'.$user->id.'/edit') }}">Update Password</a></td>
                        <td><a href="{{ url('admin/user/'.$user->id) }}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection