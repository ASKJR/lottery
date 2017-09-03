<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContest extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$query = "CREATE TABLE contest (
  					`id` INT NOT NULL AUTO_INCREMENT,
					`name` VARCHAR(255) NULL,
					`prize` DOUBLE NOT NULL,
					`last_number_range` INT NOT NULL,
					`created_at` DATETIME NULL,
					`updated_at` DATETIME NULL,
					`deleted_at` DATETIME NULL,
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

		$query = "DROP TABLE contest";
		DB::statement($query);
	}

}
