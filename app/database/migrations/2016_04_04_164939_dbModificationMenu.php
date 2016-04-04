<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbModificationMenu extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('menus', function(Blueprint $table)
        {
      		$table->integer('parent_id')->default(0);
      		$table->string('icon');
      		
        });

        Schema::table('loans', function(Blueprint $table)
        {
      		$table->integer('total_of_periods');
      		
        });

        Schema::create('references', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id');
			$table->string('name');
			$table->string('email');
			$table->string('relationship');
			$table->string('personal_id');
			$table->text('address');
			$table->string('phone');
			$table->softDeletes();
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
		Schema::table('menus', function(Blueprint $table)
        {
            $table->dropColumn("parent_id");
            $table->dropColumn("icon");
      		
        });

        Schema::table('loans', function(Blueprint $table)
        {
      		$table->dropColumn('total_of_periods');
      		
        });

        Schema::dropIfExists("references");
	}

}
