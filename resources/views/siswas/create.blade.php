@extends('siswas.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Siswa</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('siswas.index') }}"> Back</a>
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
<form action="{{ route('siswas.store') }}" method="POST">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nis:</strong>
<input type="text" name="nis" class="form-control" placeholder="Nis">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="text" name="name" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rombel:</strong>
<select name="rombel" class="form-control">
  <option value=" pilih rombel anda " selected disabled>Pilih Rombel Anda</option>
  @foreach ($rombel as $id)
  <option value="{{ $id->nama_rombel}}">{{ $id->nama_rombel }}</option>
  @endforeach
</select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection