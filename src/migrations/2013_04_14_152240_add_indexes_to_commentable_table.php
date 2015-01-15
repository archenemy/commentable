<?php

use Illuminate\Database\Migrations\Migration;

class AddIndexesToCommentableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments', function($table)
		{
			$table->index('authorable_id');
			$table->index('authorable_type');
			$table->index('commentable_id');
			$table->index('commentable_type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comments', function($table)
		{
			$table->dropIndex('comments_authorable_id_index');
			$table->dropIndex('comments_authorable_type_index');
			$table->dropIndex('comments_commentable_id_index');
			$table->dropIndex('comments_commentable_type_index');
		});
	}

}
