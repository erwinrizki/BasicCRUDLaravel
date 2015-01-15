@extends('layout')
<!-- secara otomatis extends file layout blade -->

@section('content')
	<div class='container'>
	 
	 <h3>Tambah Buku Baru</h3><br/>

	 {{ Form::open(array('action' => 'BookController@update'))}}
	 
	 {{Form::hidden('id', $book->id) }}
	 
	 {{Form::label('kode', 'Kode Buku') }}
	 
	 {{Form::text('kode', $book->kode_buku, array('class' => 'form-control'))}}
	 
	 {{Form::label('judul', 'Judul Buku') }}

	 {{Form::text('judul', $book->judul_buku, array('class' => 'form-control'))}}

	 {{Form::label('pengarang', 'Pengarang Buku') }}

	 {{Form::text('pengarang', $book->pengarang, array('class' => 'form-control'))}}

	 {{Form::label('deskripsi', 'Deskripsi Buku') }}

	 {{Form::textarea('deskripsi', $book->deskripsi, array('class' => 'form-control'))}}
	 
	 <br/><br/>

	 {{Form::submit('Update', array('class' => 'btn btn-primary')) }}
	 
	 {{Form::reset('Reset', array('class' => 'btn btn-primary')) }}

	 {{ Form::close() }}

	</div>
@stop