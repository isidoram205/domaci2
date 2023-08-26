<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industrija;
use App\Models\Proizvodjac;

class ProizvodjacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proizvodjac::create([
            'imeProizvodjaca'=>"La Roche Posay",
            'opis'=>"La Roche-Posay osnovao je farmaceut 1975. godine, a sada je prisutan u više od 60 zemalja. ",
            'industrija_id'=>Industrija::all()->random()->id,
        ]);
        Proizvodjac::create([
            'imeProizvodjaca'=>"Eucerin",
            'opis'=>"Eucerin je renomirani brend dermatološke njege kože poznat po svojim visokokvalitetnim proizvodima.",
            'industrija_id'=>Industrija::all()->random()->id,
        ]);
        Proizvodjac::create([
            'imeProizvodjaca'=>"Bioderma",
            'opis'=>"Bioderma je brend dermokozmetičkih proizvoda čija je glavna svrha očuvanje zdravlja kože.",
            'industrija_id'=>Industrija::all()->random()->id,
        ]);

        $proizvodjac4 = Proizvodjac::factory()->create();
        $proizvodjac5 = Proizvodjac::factory()->create();
    }
}
