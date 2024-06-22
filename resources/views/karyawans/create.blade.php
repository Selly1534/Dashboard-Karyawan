@extends('layouts.app')
  
@section('title', 'Tambah Karyawan')
  
@section('contents')
    <h1 class="mb-0">Tambah Karyawan</h1>
    <hr />
    <form action="{{ route('karyawans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon">
            </div>
            <div class="col">
                <textarea class="form-control" name="address" placeholder="Alamat"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>
@endsection