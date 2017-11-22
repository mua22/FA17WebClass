<?php

use Illuminate\Database\Seeder;
use App\University;
class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $universinty = new University();
        $universinty->title = 'UET';
        $universinty->ranking = 5;
        $universinty->save();

        $universinty = new University();
        $universinty->title = 'CIIT';
        $universinty->ranking = 3;
        $universinty->save();

        $universities = factory(App\University::class,50)->create();
        $universities = factory(App\User::class,10)->create();


    }
}
