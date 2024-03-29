@extends('template/main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-6">
			<h1>Form Tambah Data Mahasiswa</h1>

			<form method="post" action="/students">
			@csrf
			  <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama">
			    @error('nama')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  </div>

			  <div class="form-group">
			    <label for="nrp">NRP</label>
			    <input type="text" class="form-control  @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan nrp" name="nrp">
			    @error('nrp')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  </div>

			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email">
			    @error('email')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  </div>

			  <div class="form-group">
			    <label for="jurusan">Jurusan</label>
			    <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan">
			    @error('jurusan')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  </div>

			  

			  <button type="submit" class="btn btn-primary">Tambah Data!</button>
			</form>

		</div>	
	</div>
</div>

@endsection