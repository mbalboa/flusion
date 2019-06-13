<?php

use Illuminate\Database\Seeder;

// Nous utilisons le modèle Flux
use App\Flux;

// Nous utilisons le modèle Fabricant
use App\Fabricant;

// Nous utilisons Faker.
use Faker\Factory as Faker;

class FluxSeeder extends Seeder
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

    // Pour remplire les fabricants, nous devons tenir compte des fabricants que nous avons.
		// Pour que la clé étrangère ne nous pose pas de problèmes.
		// Nous découvrons combien de fabricants il y a dans le tableau.
		$combien= Fabricant::all()->count();

		// Boucle pour créer 20 flux
		for ($i=0; $i<19; $i++)
		{
			// On appelle le modèle flux pour créer une nouvelle ligne de la table
			Flux::create(
				[
				 'idf'=>$faker->word(),
				 'fichier'=>$faker->word(),
				 'repertoire'=>$faker->mimeType(),
				 'format'=>$faker->fileExtension(),
				 'type'=>$faker->fileExtension(),
         'taille'=>$faker->randomNumber(),
				 'fabricant_id'=>$faker->numberBetween(1,$combien)
				]
			);
		}

	}
}
