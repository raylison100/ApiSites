<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateSitesTable.
 */
class CreateSitesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sites', function(Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name', 30);
            $table->text('link');
            $table->text('xpath')->nullable();
            $table->text('selector')->nullable();
            $table->boolean('run')->default(false);
            $table->boolean('error')->default(false);
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
		Schema::drop('sites');
	}
}
