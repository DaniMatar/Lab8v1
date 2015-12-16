<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebpagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webpages', function(Blueprint $table)
		{
			$table->increments('page_id');
            $table->String('page_name');
            $table->String('active');

            $table->timestamps();
            $table->timestamp('published_at');





            $table->unsignedinteger('modified_by')->nullable();
            $table->foreign('modified_by')-> references('id')->on('users')->onDelete('cascade');


            $table->unsignedinteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


            $table->unsignedinteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('webpages');
	}

}
