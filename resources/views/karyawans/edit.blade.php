@extends('layouts.app')
  
@section('title', 'Edit Data Karyawan')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('karyawans.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $karyawan->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $karyawan->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Telepon</label>
                <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon" value="{{ $karyawan->phone }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="address" placeholder="Alamat" >{{ $karyawan->address }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Edit</button>
            </div>
        </div>
    </form>
@endsection