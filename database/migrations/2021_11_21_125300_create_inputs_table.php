<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateInputsTable.
 */
class CreateInputsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inputs', function(Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name', 30);
            $table->bigInteger('site_id');
            $table->foreign('site_id')->references('id')->on('sites');
            $table->bigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('input_types');
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
		Schema::drop('inputs');
	}
}
