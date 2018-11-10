<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->text('extracto', 16777215);
			$table->text('cuerpo', 65535);
			$table->string('imagen')->nullable();
			$table->integer('user_id')->unsigned()->index('fk_posts_users1_idx');
			$table->dateTime('published_at')->nullable();
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
		Schema::drop('posts');
	}

}
