@extends('barangs.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Barang</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('barangs.update',$barang->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Barang:</strong>
<input type="string" name="nama_barang" value="{{ $barang->barang }}" class="form-control" placeholder="Nama Barang">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Merk:</strong>
<input type="string" name="nama_merek" value="{{ $barang->barang }}" class="form-control" placeholder="Nama Merk">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Distributor:</strong>
<input type="string" name="nama_distributor" value="{{ $barang->barang }}" class="form-control" placeholder="Nama Distributor">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Harga Barang:</strong>
<input type="string" name="harga_barang" value="{{ $barang->barang }}" class="form-control" placeholder="Harga Barang">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Harga Beli:</strong>
<input type="string" name="harga_beli" value="{{ $barang->barang }}" class="form-control" placeholder="Harga Beli">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Stok:</strong>
<input type="string" name="stok" value="{{ $barang->barang }}" class="form-control" placeholder="Stok">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tanggal Masuk:</strong>
<input type="date" name="tanggal_masuk" value="{{ $barang->barang }}" class="form-control" placeholder="Tanggal Masuk">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Petugas:</strong>
<input type="string" name="nama_petugas" value="{{ $barang->barang }}" class="form-control" placeholder="Nama Petugas" value="{{ Auth::User()->name }}" disabled>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection