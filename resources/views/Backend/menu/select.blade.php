@extends('Backend.back')

@section('admincontent')
    <div>
        <h1>Menus</h1>
    </div>
    <div>
        <a href="{{ url('admin/menu/create') }}" class="btn btn-primary">Add data</a>
    </div>
    <div class="row mt-2">
        <div class="col-4 mb-2">
            <form action="{{ url('admin/select') }}" method="get">
                <select class="form-select" name="idkategori" onchange="this.form.submit()">
                    <option value="">--Select Kategori--</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Menu</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $menu->kategori }}</td>
                        <td>{{ $menu->menu }}</td>
                        <td>{{ $menu->deskripsi }}</td>
                        <td><img width="100px" src="{{ asset('images/'.$menu->gambar) }}" alt=""></td>
                        <td>{{ $menu->harga }}</td>
                        <td><a href="{{ url('admin/menu/'.$menu->idmenu.'/edit') }}">Update</a></td>
                        <td><a href="{{ url('admin/menu/'.$menu->idmenu) }}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $menus->withQueryString()->links() }}
    </div>
@endsection