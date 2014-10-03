<?php

	use Illuminate\Support\Facades\DB;

	class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();
		DB::table('teams')->truncate();

		//new admin team
		$team = new Team();
		$team->name = 'admin';
		$team->description = 'new admin team';
		$team->save();


		$user = User::create([
			'username' => 'admin',
			'email' => 'admin@admin.com',
			'password' => Hash::make('admin'),
			'first_name' => 'admin',
			'last_name' => 'admin',
			'mainTeam' => $team->id,
		]);
	}

}