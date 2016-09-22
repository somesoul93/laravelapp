@extends('template')

@section('main')
	<div id='siswa'>
		<h2>Tambah Siswa</h2>
		<form action="{{ url('siswa') }}" method = "POST">
			<div class="form-group">
				<label for="nisn" class="control-label">NISN</label>
				<input name="nisn" id="nisn" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="namaSiswa" class="control-label">Nama</label>
				<input name="namaSiswa" id="namaSiswa" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="tanggalLahir" class="control-label">Tgl Lahir</label>
				<input name="tanggalLahir" id="tanggalLahir" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="jenisKelamin" class="control-label">Jenis Kelamin: </label>
				<div class="radio">
					<label><input name="jenisKelamin" type="radio" value="L" id="jenisKelamin"> Laki-laki </label>
				</div>
				<div class="radio">
					<label><input name="jenisKelamin" type="radio" value="P" id="jenisKelamin"> Perempuan </label>
				</div>
				<div class="form-group">
					<input class="btn btn-primary form-control" type="submit" value="Tambah Siswa">
				</div>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
	</div>
@stop

@section('footer')
	<div id="footer">
		<p>&copy; 2016 laravelapp.dev</p>
	</div>
@stop