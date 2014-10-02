<?php

	class DatabaseSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			Eloquent::unguard();

			DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
			$this->call('UsersTableSeeder');
			DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
		}

	}
