@extends('layouts.main')

@section('container')
    <h1>Ini adalah halaman kelas</h1>
    @if(session('success'))
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
    </svg>
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" width="20" height="20"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            {{ session('success') }}
        </div>
    </div>
    @endif
    @auth
        <div class="d-flex">
            <a href="/kelas/create" class="btn btn-primary my-2">Tambah Kelas</a>
            <div class="w-25 d-flex my-2">
                <form action="/kelas" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search Student" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
        </div>
    @endauth
    <div style="display: flex; align-item: center; justify-content: center;">
        <table class="table table-bordered table-dark table-striped" style="text-align: center;">
            <thead>
                <th>No</th>
                <th>Kelas</th>
                @auth
                    <th>Action</th>
                @endauth
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($kelass as $kelas)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <th>{{ $kelas->kelas }}</th>
                        @auth
                            <td>
                                <a type="button" class="btn btn-primary" href="/kelas/detail/{{ $kelas->id }}">Detail</a>
                                <a type="button" class="btn btn-warning" href="/kelas/edit/{{ $kelas->id }}">Edit</a>
                                <form action="/kelas/delete/{{ $kelas->id }}" method="post" class="d-inline" onsubmit="return confirmDelete()">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @endauth
                    </tr>
                    <script>
                        function confirmDelete() {
                            return confirm('Apakah anda yakin ingin menghapus data {{ $kelas->kelas }} ?');
                        }
                    </script>
                @endforeach 
            </tbody>
        </table>
    </div>
@endsection
