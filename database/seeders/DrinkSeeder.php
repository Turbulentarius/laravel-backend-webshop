<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Drink;

class DrinkSeeder extends Seeder
{
    public function run(): void
    { 
        // Deaktiver fremmede nøglekontroller
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
          // Slet relaterede data i order_line_items
        DB::table('order_line_items')->delete();

        // Slet alle rækker i drinks-tabellen
        DB::table('drinks')->delete();
        // Genaktiver fremmede nøglekontroller
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Tilføj drinks
        Drink::create([
            'title' => 'Dark & Stormy Deluxe',
            'description' => 'En kraftfuld smagsoplevelse: mørk rom, ginger beer og frisk lime. Kraftfuld, varm og perfekt til vintermånederne',
            'price' => 70.00,
            'img' => 'http://127.0.0.1:8000/images/drink1.jpg'
        ]);

        Drink::create([
            'title' => 'Nordic Spritz',
            'description' => 'En skandinavisk udgave af Aperol Spritz: hyldeblomst, dansk mousserende vin og danskvand. Elegant, frisk og let bitter.',
            'price' => 70.00,
            'img' => 'http://127.0.0.1:8000/images/drink2.jpg'
        ]);

        Drink::create([
            'title' => 'Negroni Nights',
            'description' => 'Elsker du den bitre italienske klassiker? Denne kasse indeholder vermouth, gin og bitter – plus appelsinskiver og opskrift.',
            'price' => 40.00,
            'img' => 'http://127.0.0.1:8000/images/drink3.jpg'
        ]);

        Drink::create([
            'title' => 'Zero Proof Zen',
            'description' => 'Elegant og rolig – med alkoholfri gin, tonic, rosmarin og tørret grapefrugt. For voksne, der ønsker smagen uden procenterne.',
            'price' => 50.00,
            'img' => 'http://127.0.0.1:8000/images/drink4.jpg'
        ]);

        Drink::create([
            'title' => 'Cool Kids Box',
            'description' => 'En sjov og alkoholfri boks, perfekt til fester med børn eller teenagere. Indeholder sodavand, frugtsirup, sugerør og pynt. Gør det sjovt at skåle – uden alkohol!',
            'price' => 60.00,
            'img' => 'http://127.0.0.1:8000/images/drink5.jpg'
        ]);

        Drink::create([
            'title' => 'FredagsGin',
            'description' => 'En klassisk gin & tonic-kasse med et twist. Indeholder dansk kvalitetsgin, premium tonic, tørrede appelsinskiver og pink peberkorn. Perfekt til 4-6 drinks – lige til at hælde op.',
            'price' => 45.00,
            'img' => 'http://127.0.0.1:8000/images/drink6.jpg'
        ]);

        Drink::create([
            'title' => 'Mocktail Moments',
            'description' => 'Friske og farverige mocktails til alle. Indeholder ingefærøl, hyldeblomst, lime, agurk og mynte. Let at mikse – uimodståelig smag',
            'price' => 60.00,
            'img' => 'http://127.0.0.1:8000/images/drink7.jpg'
        ]);

        Drink::create([
            'title' => 'Rom & Relax',
            'description' => 'Denne tropiske kasse byder på mørk rom, passionsfrugtsirup, lime og mynte – med opskrift på både Mojito og Passion Punch. Alt du skal gøre er at tilføje is og et glas.',
            'price' => 30.00,
            'img' => 'http://127.0.0.1:8000/images/drink8.jpg'
        ]);

        Drink::create([
            'title' => 'BrunchBubbles',
            'description' => 'Perfekt til brunch med vennerne. Indeholder mousserende vin, appelsinjuice og friske bær til pynt.',
            'price' => 30.00,
            'img' => 'http://127.0.0.1:8000/images/drink9.jpg'
        ]);
    }
}