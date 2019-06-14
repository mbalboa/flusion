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

    $equipe = array("Ingénierie Technique des Projets 1", "Ingénierie Technique des Projets 2", "Intégration des solutions", "Industrialisation des flux", "Déploiements Offres et Services
    Hébergés", "DEVOPS", "Programme Orange Bank", "Pôle Technique Big Data", "ArchitecturesTechniques et Expérimentations", "Pilotage des transformations techniques", "MAINFRAME",
    "Serveurs & Virtualisation", "Réseau & Stockage", "Architecture DATA CENTER", "Middleware", "Services Réseau");
		// Boucle pour créer 10 fabricants
		for ($i=0; $i<=14; $i++)
		{
			// On appelle le modèle fabricant pour créer une nouvelle ligne de la table

$rand_equipe = array_rand($equipe, 1);

			Fabricant::create(
				[
					'gs'=> "gs" . $faker->numberBetween(1000,9999),
					'equipe'=>$equipe[$rand_equipe],
					'mail'=>$faker->firstName(). "." . $faker->lastName() . "@groupama.com"
				]
			);
		}

	}

}
