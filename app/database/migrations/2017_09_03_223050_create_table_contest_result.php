<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContestResult extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$query = "CREATE TABLE contest_result (
  					`id` INT NOT NULL AUTO_INCREMENT,
					`contest_id` INT NOT NULL,
					`winning_numbers` JSON NOT NULL,
					`created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
				PRIMARY KEY (`id`))
				ENGINE = MyISAM";
		DB::statement($query);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$query = "DROP TABLE contest_result";
		DB::statement($query);
	}

}
