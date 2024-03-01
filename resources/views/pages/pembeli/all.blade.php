@extends('layouts.main')
@section('container')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">namaPembeli</th>
        <th scope="col">alamatPembeli</th>
        <th scope="col">banyakDibeli</th>
        <th scope="col">tanggalmembeli</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($pembeli as $key => $pembelian)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $pembelian->namaPembeli}}</td>
          <td>{{ $pembelian->alamatPembeli}}</td>
          <td>{{ $pembelian->banyakDibeli }}</td>
          <td>{{ $pembelian->tanggalmembeli }}</td>
          <th><a type="button" class="button1" href="/pembeli/detail/{{ $pembelian->id }}">detail</a></th>
        </tr>
        
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection