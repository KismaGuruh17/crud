@extends('students.layout')
@section('content')
  
<div class="container">
  <div class="row" style="margin:12px;">
    <div class="col-12">
      <div class="card">
        <div class="card-header">DATA</div>
           <div class="card-body">
             <h4 class="card-title">NAMA: {{ $students->nama }}</h4>
             <h4 class="card-title">NIM: {{ $students->nim }}</h4>
              <h4 class="card-title">ALAMAT: {{ $students->alamat }}</h4>    
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>