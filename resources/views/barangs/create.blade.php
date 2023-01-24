@extends('barangs.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Barang</h2>
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
<form action="{{ route('barangs.store') }}" method="POST">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Barang:</strong>
<input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
</div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Merk:</strong>
            <select class="form-group" name="nama_merek" id="">Nama Merk:
                @foreach($merk as $key => $m)
                <option value="" selected disabled>Pilih Salah Satu</option>
                <option value="{{ $m->merk }}">{{ $m->merk }}</option>
                @endforeach
            </select>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Distributor:</strong>
                <select name="nama_distributor" id="">Nama Distributor:
                @foreach($dis as $key => $d)
                <option value="" selected disabled>Pilih Salah Satu</option>
                <option value="{{ $d->nama_distributor }}">{{ $d->nama_distributor }}</option>
                @endforeach
            </select>        
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Barang:</strong>
                    <input type="number" min="0"  name="harga_barang" class="form-control" placeholder="Harga Barang">
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga Beli:</strong>
                        <input type="number" min="0"  name="harga_beli" class="form-control" placeholder="Harga Beli">
                    </div>
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Stok:</strong>
                            <input type="number" min="0" name="stok" class="form-control" placeholder="Stok">
                        </div>
                    </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tanggal Masuk:</strong>
                                <input type="date" name="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk">
                            </div>
                        </div>
                            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Petugas:</strong>
                                    <input type="text" name="nama_petugas" class="form-control" placeholder="Nama Petugas" value="{{ Auth::User()->name }}" disabled>
                                </div>
                            </div> -->
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
@endsection