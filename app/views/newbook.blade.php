@extends('layout')
<!-- secara otomatis extends file layout blade -->

@section('content')
	<div class='container'>
	 
	 <h3>Tambah Buku Baru</h3><br/>

	 {{ Form::open(array('action' => 'BookController@store'))}}
	 
	 {{Form::label('kode', 'Kode Buku') }}
	 
	 {{Form::text('kode', '', array('class' => 'form-control'))}}
	 
	 {{Form::label('judul', 'Judul Buku') }}

	 {{Form::text('judul', '', array('class' => 'form-control'))}}

	 {{Form::label('pengarang', 'Pengarang Buku') }}

	 {{Form::text('pengarang', '', array('class' => 'form-control'))}}

	 {{Form::label('deskripsi', 'Deskripsi Buku') }}

	 {{Form::textarea('deskripsi', '', array('class' => 'form-control'))}}
	 
	 <br/><br/>

	 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	 
	 {{Form::reset('Reset', array('class' => 'btn btn-primary')) }}

	 {{ Form::close() }}

	</div>
@stop