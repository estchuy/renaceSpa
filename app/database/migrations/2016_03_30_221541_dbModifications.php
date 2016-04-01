<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbModifications extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loans', function(Blueprint $table)
        {
            $table->float("interest_fee", 11, 2);
            $table->float("capital", 11, 2);
            $table->float("balance", 11, 2);
      		$table->integer('parent_id');
      		$table->boolean('pay');
      		
        });

        Schema::table('clients', function(Blueprint $table)
        {
            $table->string("company");
      		
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('loans', function(Blueprint $table)
        {
            $table->dropColumn('interest_fee');
            $table->dropColumn('parent_id');
            $table->dropColumn('pay');
        });

        Schema::table('clients', function(Blueprint $table)
        {
            $table->dropColumn("company");
      		
        });
	}

}
