@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Tambah</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Nim</label></br>
        <input type="text" name="nim" id="nim" class="form-control"></br>
        <label>alamat</label></br>
        <input type="text" name="alamat" id="alamat" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop