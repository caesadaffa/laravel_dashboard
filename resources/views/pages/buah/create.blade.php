@extends('layouts.main')

@section('container')
    <h1>Add Buah</h1>
    <form action="/page/buah/add" method="post">
        @csrf
        
        <div class="form-group">
            <label for="nama">Nama Buah:</label>
            <input type="text" name="namaBuah" id="namaBuah" class="form-control" required>
            <select class="form-select" name="grade_id" id="">
                @foreach ($grade_id as $grade)
                    <option value="{{ $grade->buah_id }}">{{ $grade->buah_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jenisBuah">Jenis Buah:</label>
            <input type="text" name="jenisBuah" id="jenisBuah" class="form-control" required>
            <select class="form-select" name="grade_id" id="">
                @foreach ($grade_id as $grade)
                    <option value="{{ $grade->buah_id }}">{{ $grade->buah_nama }}</option>
                @endforeach
        </div>
        <div class="form-group">
            <label for="ukuran">Ukuran:</label>
            <input type="text" name="ukuran" id="ukuran" class="form-control" required>
            <select class="form-select" name="grade_id" id="">
                @foreach ($grade_id as $grade)
                    <option value="{{ $grade->buah_id }}">{{ $grade->buah_nama }}</option>
                @endforeach
        </div>
        <div class="form-group">
            <label for="expired">Expired:</label>
            <input type="date" name="Expired" id="expired" class="form-control" required>
            <select class="form-select" name="grade_id" id="">
                @foreach ($grade_id as $grade)
                    <option value="{{ $grade->buah_id }}">{{ $grade->buah_nama }}</option>
                @endforeach
        </div>
       
        <button type="submit" class="btn btn-primary">Add Buah Baru</button>
    </form>
@endsection