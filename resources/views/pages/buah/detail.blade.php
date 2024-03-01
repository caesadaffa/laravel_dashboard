@extends('layouts.main')
<table class="table">
    <thead>
        <tr>
          
          <th scope="col">namaBuah</th>
          <th scope="col">jenisBuah</th>
          
          <th scope="col">Ukuran</th>
          <th scope="col">Expired</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        
          <tr>
            
            <td>{{ $buahs->namaBuah}}</td>
            <td>{{ $buahs->jenisBuah}}</td>
         
            <td>{{ $buahs->Ukuran }}</td>
            <td>{{ $buahs->Expired }}</td>
            
          </tr>
          
        </tr>
      </tbody>