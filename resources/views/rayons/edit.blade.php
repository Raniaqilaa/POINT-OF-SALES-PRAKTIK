@extends('rayons.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Rayon</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('rayons.index') }}"> Back</a>
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
<form action="{{ route('rayons.update',$rombel->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rayon:</strong>
<input type="text" name="rayon" value="{{ $rayon->rayon }}" class="form-control" placeholder="Rayon">
</div>
</div>
<div class="ol-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Pembimbing Rayon:</strong>
<input type="string" name="pembimbing_rayon" value="{{ $rayon->pembimbing_rayon }}" class="form-control" placeholder="Pembimbing Rayon">
</div>
</div>
<div class="ol-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>No Hp:</strong>
<input type="number" name="no_telepon" value="{{ $rayon->no_hp }}" class="form-control" placeholder="No Hp Rayon">
</div>
</div>
<div class="ol-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Alamat:</strong>
<input type="text" name="alamat" value="{{ $rayon->alamat }}" class="form-control" placeholder="Alamat">
</div>
</div>
<div class="col-xs-12 col-sm-12 c0l-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection