@extends('template/main')

@section('title', 'Detail Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-6">
	<div class="row">
		<div class="col">
			<h1>Detail Mahasiswa</h1>
			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">{{$student->nama}}</h5>
			    <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
			    <p class="card-text">{{$student->nrp}}</p>
			    <p class="card-text">{{$student->jurusan}}</p>

			    <button type="submit" class="btn btn-primary">Edit</button>
			    <button type="submit" class="btn btn-danger">Detele</button>
			    <a href="/students" class="card-link">kembali</a>
			  </div>
			</div>
		</div>
	</div>
</div>

@endsection