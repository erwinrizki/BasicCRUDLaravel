@extends('layout')

@section('content')

<section class="container">
 <!-- cek flash data untuk memunculkan pesan success -->
	 @if(Session::has('message'))
		<div class="alert alert-dismissable alert-success">
			<button type="button" class="close" data-dismiss="alert">x</button>
			<p>{{ Session::get('message') }}</p>
		</div>
	 @endif
	 
	 @if(Session::has('update'))
		<div class="alert alert-dismissable alert-success">
			<button type="button" class="close" data-dismiss="alert">x</button>
			<p>{{ Session::get('update') }}</p>
		</div>
	 @endif
	 
 <a href="{{ URL::to('newbook') }}"><h3>Tambah Buku</h3></a><br/> <!-- membuat link ke route newbook -->
 <table class="table">
    <tr>
	   <th>No</th>
       <th>Kode Buku</th>
       <th>Judul Buku</th>
       <th>Pengarang</th>
	   <th>Aksi</th>
    </tr>
	<?php $no = 1; ?>
    @foreach($booksdata as $book)
      <tr>
	     <td>{{ $no }}</td>
         <td>{{ $book->kode_buku }}</td>
         <td>{{ $book->judul_buku }}</td>
         <td>{{ $book->pengarang }}</td>
		 <td>
		 	{{ link_to_action('BookController@detail', 'Detail', array($book->id)) }}
			{{ link_to_action('BookController@edit', 'Edit', array($book->id)) }}
			{{ link_to_action('BookController@delete', 'Hapus', array($book->id)) }}
		</td>
      </tr>
	<?php $no++; ?>
    @endforeach
 </table>
</section>

@stop