@extends('layout')
<!-- secara otomatis extends file layout blade -->

@section('content')
	<div class='container'>
	 
	 <h3>Detail Buku</h3><br/>

	 <table class="table">
	 	<tr>
	 		<td><b>Kode Buku</b></td>
	 		<td>:</td>
	 		<td>{{ $book->kode_buku }}</td>
	 	</tr>
	 	<tr>
	 		<td><b>Judul Buku</b></td>
	 		<td>:</td>
	 		<td>{{ $book->judul_buku }}</td>
	 	</tr>
	 	<tr>
	 		<td><b>Pengarang</b></td>
	 		<td>:</td>
	 		<td>{{ $book->pengarang }}</td>
	 	</tr>
	 	<tr>
	 		<td><b>Deskripsi Buku</b></td>
	 		<td>:</td>
	 		<td>{{ $book->deskripsi }}</td>
	 	</tr>
	 </table>

	</div>
@stop