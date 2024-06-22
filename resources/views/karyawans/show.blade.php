@extends('layouts.app')

@section('title', 'Daftar Karyawan')

@section('contents')
<h1 class="mb-0">Detail Karyawan</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $karyawan->name }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $karyawan->email }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">No Telepon</label>
        <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon" value="{{ $karyawan->phone }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="address" placeholder="Alamat" readonly>{{ $karyawan->address }}</textarea>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $karyawan->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $karyawan->updated_at }}" readonly>
    </div>
</div>
@endsection