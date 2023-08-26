<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industrija;

class IndustrijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Industrija::create([
            'nazivIndustrije'=>"Dermavita International",
            'opis'=>"Bavimo se uvozom i distribucijom francuske profesionalne kozmetike Guinot Institut Paris, Mary Cohr i make up Masters Colors. ",
        ]);
        Industrija::create([
            'nazivIndustrije'=>"Farmasi cosmetics",
            'opis'=>"Farmasi je globalni brend kozmetičkih proizvoda koji nudi širok raspon proizvoda za njegu kože, šminke i drugih kozmetičkih proizvoda. ",
        ]);
        Industrija::create([
            'nazivIndustrije'=>"Beiersdorf AG",
            'opis'=>"Beiersdorf AG je njemačka multinacionalna kompanija koja se bavi proizvodnjom kozmetičkih proizvoda. Nivea je najpoznatiji brend koji pripada kompaniji Beiersdorf. ",
        ]);

        $industrija4 = Industrija::factory()->create();
        $industrija5 = Industrija::factory()->create();


    }
}
