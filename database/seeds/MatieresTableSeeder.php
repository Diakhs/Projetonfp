<?php

use Illuminate\Database\Seeder;

class MatieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Matiere::class, 30)->create();
    }
}
