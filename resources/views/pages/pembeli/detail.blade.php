@extends('layouts.main')
<table class="table">
    <thead>
        <tr>
          
          <th scope="col">namaPembeli</th>
          <th scope="col">alamatPembeli</th>
          
          <th scope="col">banyakDibeli</th>
          <th scope="col">tanggalmembeli</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        
          <tr>
            
            <td>{{ $pembeli->namaPembeli}}</td>
            <td>{{ $pembeli->alamatPembeli}}</td>
         
            <td>{{ $pembeli->banyakDibeli }}</td>
            <td>{{ $pembeli->tanggalmembeli }}</td>
            
          </tr>
          
        </tr>
      </tbody>