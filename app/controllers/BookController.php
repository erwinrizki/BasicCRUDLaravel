<?php

class BookController extends BaseController {
	public function store() {
		$book = new Book; //instance model Book
		
		$book->kode_buku = Input::get('kode');
		$book->judul_buku = Input::get('judul');
		$book->pengarang = Input::get('pengarang');
		$book->deskripsi = Input::get('deskripsi');
		
		$book->save(); //menyimpan record ke database
		//redirect ke route booklist
		return Redirect::to('booklist')->with('message', 'Data Berhasil Ditambahkan');
	}
	
	public function edit($id) {
		$book = Book::find($id); //ambil record dr database berdasarkan id
		return View::make('editbook')->with('book', $book);
	}
	
	public function update() {
		$id = Input::get('id');
		$book = Book::find($id);
		
		$book->kode_buku = Input::get('kode');
		$book->judul_buku = Input::get('judul');
		$book->pengarang = Input::get('pengarang');
		$book->deskripsi = Input::get('deskripsi');
		
		$book->save();
		return Redirect::to('booklist')->with('update', 'Data Berhasil Diupdate');
	}
	
	public function delete($id) {
		$book = Book::find($id);
		
		$book->delete();
		return Redirect::to('booklist');
	}

	public function detail($id) {
		$book = Book::find($id);
		return View::make('detailbook')->with('book', $book);
	}
}

?>