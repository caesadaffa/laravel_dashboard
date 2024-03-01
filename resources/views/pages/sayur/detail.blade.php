@extends('layouts.main')
<table class="table">
    <thead>
        <tr>
          
          <th scope="col">namaSayur</th>
          <th scope="col">warnaSayur</th>
          
          <th scope="col">hargaSayur</th>
          <th scope="col">tanggalExpired</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        
          <tr>
            
            <td>{{ $sayurs->namaSayur}}</td>
            <td>{{ $sayurs->warnaSayur}}</td>
         
            <td>{{ $sayurs->hargaSayur }}</td>
            <td>{{ $sayurs->tanggalExpired }}</td>
            
          </tr>
          
        </tr>
      </tbody>
