@extends('transaksis.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Transaksi</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
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
<form action="{{ route('transaksis.store') }}" method="POST">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Barang:</strong>
<select class="from-control" style="width:1333px" id="nama_barang" name="nama_barang">
        <option value"">Pilihan Barang</option>
        @foreach ($barang as $ml)
        <option value ="{{ $ml->nama_barang }}">{{ $ml->nama_barang}} [stok : {{ $ml->stok}}] </option>
        @endforeach
    </select>
</div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Harga Barang:</strong>
            <select class="from-control" style="width:1333px" ; name="harga_barang">
        <option value"">Pilihan Barang</option>
        @foreach ($barang as $item)
        <option value="{{ $item->harga_barang }}">{{ $item->harga_barang}}</option>
        @endforeach
    </select>        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Barang:</strong>
                <input type="number" name="total_barang" class="form-control" placeholder="Total Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Harga:</strong>
                <input type="number" name="total_harga" class="form-control" placeholder="Total Harga">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Bayar:</strong>
                    <input type="number" name="total_bayar" class="form-control" placeholder="Total Barang">
                </div>
            </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Kembalian:</strong>
                            <input type="number" name="kembalian" class="form-control" placeholder="Kembalian">
                        </div>
                    </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tanggal Beli:</strong>
                                <input type="date" name="tanggal_beli" class="form-control" placeholder="Tanggal Beli">
                            </div>
                        </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
@endsection