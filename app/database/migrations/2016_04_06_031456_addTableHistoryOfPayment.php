<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableHistoryOfPayment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pay_loans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('loan_id');
			$table->integer('paymentNumber');
			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('diseases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id');
			$table->boolean('diabetes');
			$table->boolean('hiper_arterial');
			$table->boolean('pro_tiroides');
			$table->boolean('des_hormonales');
			$table->boolean('epilesia');
			$table->boolean('pro_cardiaco');
			$table->boolean('cancer');
			$table->boolean('asma');
			$table->boolean('queloides');
			$table->boolean('vih');
			$table->boolean('renal');
			$table->boolean('higado_graso');
			$table->boolean('pro_neurologicos');
			$table->boolean('depresion');
			$table->boolean('enfer_neuromusculares');
			$table->boolean('esclerodermia');
			$table->boolean('psoriasis');
			$table->boolean('herpes');
			$table->boolean('pro_respiratorio');
			$table->boolean('otros');
			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('medicines', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id');
			$table->boolean('vit_e');
			$table->boolean('gingo');
			$table->boolean('isotretiroina');
			$table->boolean('esteroidoes');
			$table->boolean('apirina');
			$table->boolean('walfarina');
			$table->boolean('tranquilizantes');
			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('skin_treatments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id');
			$table->boolean('retin_a');
			$table->boolean('hidroquinona');
			$table->boolean('esteroidoes');
			$table->boolean('protector_solar');
			$table->boolean('creamas_antiedad');
			$table->boolean('tonico');
			$table->boolean('jabon');
			$table->boolean('humectante');
			$table->boolean('serum');
			$table->softDeletes();
			$table->timestamps();
		});

		Schema::table('clients', function(Blueprint $table)
        {
            $table->boolean("pregnant");
            $table->boolean("medic_treatment");
            $table->string("medic_treatment_detail");
            $table->integer('age');
            $table->string("civil_status");
            $table->string("cumple");
      		
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists("pay_loans");
		Schema::dropIfExists("diseases");
		Schema::dropIfExists("medicines");
		Schema::dropIfExists("skin_treatments");

		Schema::table('clients', function(Blueprint $table)
        {
            $table->dropColumn("pregnant");
            $table->dropColumn("medic_treatment");
            $table->dropColumn("medic_treatment_detail");
            $table->dropColumn("age");
            $table->dropColumn("civil_status");
            $table->dropColumn("cumple");
      		
        });
	}

}
