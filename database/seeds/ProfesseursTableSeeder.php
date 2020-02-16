<?php

use Illuminate\Database\Seeder;

class ProfesseursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Professeur::class, 30)->create();
    }

}
