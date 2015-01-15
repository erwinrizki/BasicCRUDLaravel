<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//membuat tabel baru
		Schema::create('books', function($table) {
			$table->increments('id');
			$table->string('kode_buku')->unique();
			$table->string('judul_buku');
			$table->string('pengarang');
			$table->string('deskripsi');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//menghapus tabel jika dilakukan roolback
		Schema::drop('books');
	}

}
