@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">EDIT</div>
  <div class="card-body">
       
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$students->nama}}" class="form-control"></br>
        <label>Nim</label></br>
        <input type="text" name="nim" id="nim" value="{{$students->nim}}" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$students->alamat}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop