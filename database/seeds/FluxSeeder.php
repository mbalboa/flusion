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
    $format = array("Fixe", "Variable");
    $type = array("Texte", "Binaire");
    $code_entité = array("B", "D", "I", "L", "J", "K", "N", "O", "S", "U", "V", "Z");
    $code_environnement = array("P", "Q", "R");
    $code_source = array("GNE", "GDOC", "GGE", "GCA", "GCO", "GRAA", "GLBR", "GCM", "GPVL", "GOI", "GMED", "Multi Caisse");
    $code_cible = array("DMT", "ACA", "ARF", "ANS", "CBM", "CLI", "CPV", "BGG", "FMA", "EFA", "DWG", "FPL", "GST", "HIS", "IBG", "IDD", "MKT", "OPP");

		// Boucle pour créer 20 flux
		for ($i=0; $i<=39; $i++)
		{
      $fichier = $faker->word() . "." . $faker->fileExtension();
      $rand_format = array_rand($format, 1);
      $rand_type = array_rand($type, 1);
      $rand_entité = array_rand($code_entité,1);
      $rand_environnement = array_rand($code_environnement,1);
      $rand_source = array_rand($code_source,1);
      $rand_cible = array_rand($code_cible,1);

			// On appelle le modèle flux pour créer une nouvelle ligne de la table
			Flux::create(
				[

				 'idf'=>$code_entité[$rand_entité] . $code_environnement[$rand_environnement] . $code_source[$rand_source] . $code_cible[$rand_cible],
				 'fichier'=>$fichier,
				 'repertoire'=>$faker->mimeType() . "/" . $fichier,
				 'format'=>$format[$rand_format],
				 'type'=>$type[$rand_type],
         'taille'=>$faker->numberBetween(100,999999),
				 'fabricant_id'=>$faker->numberBetween(1,$combien)
				]
			);
		}

	}
}
