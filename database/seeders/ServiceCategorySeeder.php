<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                "name" => "Air Conditionné",
                "slug" => "air-conditionné",
                "image" => "1521969345.png"
            ],
            [
                "name" => "Beauté",
                "slug" => "beaute",
                "image" => "1521969358.png"
            ],
            [
                "name" => "Plomberie",
                "slug" => "plomberie",
                "image" => "1521969409.png"
            ],
            [
                "name" => "Filtre pour douche",
                "slug" => "filtre-pour-douche",
                "image" => "1521969430.png"
            ],
            [
                "name" => "Nettoyage à domicile",
                "slug" => "nettoyage-a-domicile",
                "image" => "1521969446.png"
            ],
            [
                "name" => "Menuiserie",
                "slug" => "menuiserie",
                "image" => "1521969454.png"
            ],
            [
                "name" => "Contrôle des nuisibles",
                "slug" => "controle-des-nuisibles",
                "image" => "1521969464.png"
            ],
            [
                "name" => "Plaque de cuisson",
                "slug" => "plaque-de-cuisson",
                "image" => "1521969490.png"
            ],
            [
                "name" => "Purificateur d'eau",
                "slug" => "purificateur-d-eau",
                "image" => "1521972593.png"
            ],
            [
                "name" => "Réparation d'ordinateurs",
                "slug" => "reparation-d-ordinateurs",
                "image" => "1521969512.png"
            ],
            [
                "name" => "TÉLÉVISION",
                "slug" => "television",
                "image" => "1521969522.png"
            ],
            [
                "name" => "Réfrigérateur",
                "slug" => "refrigerateur",
                "image" => "1521969536.png"
            ],
            [
                "name" => "Geyser",
                "slug" => "geyser",
                "image" => "1521969558.png"
            ],
            [
                "name" => "Electroménager",
                "slug" => "electromenager",
                "image" => "1521972769.png"
            ],
            [
                "name" => "Document",
                "slug" => "document",
                "image" => "1521974355.png"
            ],
            [
                "name" => "Déménageurs et emballeurs",
                "slug" => "demenageurs-et-emballeurs",
                "image" => "1521969599.png"
            ],
            [
                "name" => "Domotique",
                "slug" => "domotique",
                "image" => "1521969622.png"
            ],
            [
                "name" => "Blanchisserie",
                "slug" => "blanchisserie",
                "image" => "1521972663.png"
            ],
            [
                "name" => "Peinture",
                "slug" => "peinture",
                "image" => "1521972643.png"
            ],
            ]);
    }
}
