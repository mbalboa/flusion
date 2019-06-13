<?php

use Illuminate\Database\Seeder;

// Nous utilisons le modèle Fabricant
use App\Fabricant;

// Nous utilisons Faker.
use Faker\Factory as Faker;

class FabricantSeeder extends Seeder
{
  /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Nous créeons une instance de Faker
		$faker = Faker::create();

		// Boucle pour créer 10 fabricants
		for ($i=0; $i<9; $i++)
		{
			// On appelle le modèle fabricant pour créer une nouvelle ligne de la table
			Fabricant::create(
				[
					'gs'=>$faker->word(),
					'equipe'=>$faker->word(),
					'mail'=>$faker->email()
				]
			);
		}

	}

}
