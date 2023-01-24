@extends('merks.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Halaman Merk</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('merks.create') }}"> Create New Merk</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>No</th>
<th>Merk</th>
<th width="280px">Action</th>
</tr>
@foreach ($merks as $merk)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $merk->merk }}</td>
<td>
<form action="{{ route('merks.destroy',$merk->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('merks.show',$merk->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('merks.edit',$merk->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger"
    onclick="return confirm('yakin mau di hapus {{ $merk->merk }} ?')">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $merks->links() !!}
@endsection