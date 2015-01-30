<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(
			'cards', function (Blueprint $table) {
				$table->increments('id');
				$table->string('first_name', 100)->nullable();
				$table->string('last_name', 100)->nullable();
				$table->string('address', 64)->nullable();
				$table->integer('post_code')->unsigned()->nullable();
				$table->string('card_number')->nullable();
				$table->integer('expire_month')->nullable();
				$table->integer('expire_year')->nullable();
				$table->timestamps();
				$table->softDeletes();
			}
		);

		DB::statement(
			"ALTER TABLE  `cards` ADD  `state` ENUM(  'ACT',  'NSW',  'NT',  'QLD',  'SA',  'TAS',  'VIC',  'WA' ) NULL DEFAULT NULL AFTER  `post_code`;"
		);
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cards');
	}

}
