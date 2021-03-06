<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('CategoriaTableSeeder');
		$this->call('IntercambiosTableSeeder');
		$this->call('AnunciosTableSeeder');
		$this->call('TallersTableSeeder');
		$this->call('PropuestasTableSeeder');
		$this->call('NoticiasTableSeeder');
		$this->call('TareasTableSeeder');
	}

}
