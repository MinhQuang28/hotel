<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('admins', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('email');
			$table->string('pass');
			$table->date('birth');
			$table->string('address');
			$table->boolean('gender');
			$table->integer('access');
			$table->boolean('status');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('admins');
	}
}
