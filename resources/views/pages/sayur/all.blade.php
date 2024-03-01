@extends('layouts.main')
@section('container')

<table class="table">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">namaSayur</th>
          <th scope="col">warnaSayur</th>
          
          <th scope="col">hargaSayur</th>
          <th scope="col">tanggalExpired</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($sayurs as $key => $sayur)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $sayur->namaSayur}}</td>
            <td>{{ $sayur->warnaSayur}}</td>
         
            <td>{{ $sayur->hargaSayur }}</td>
            <td>{{ $sayur->tanggalExpired }}</td>
            <th><a type="button" class="button1" href="/sayur/detail/{{ $sayur->id }}">detail</a></th>
          </tr>
          
        </tr>
        @endforeach
      </tbody>
    </table>
  @endsection