<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('accounts', function(Blueprint $table) {
            $table->increments('id');

            $table->string('type', 1);
            $table->integer('gender')->default(0);

            $table->string('name1', 100)->nullable();
            $table->string('name2', 100)->nullable();
            $table->string('name3', 100)->nullable();

            $table->date('dob')->nullable();

            $table->timestamps();
            $table->softDeletes();
            // $table->timestamp('deleted_at')->nullable();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('accounts');
	}

}
