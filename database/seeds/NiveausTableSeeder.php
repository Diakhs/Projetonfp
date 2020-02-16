<?php

use Illuminate\Database\Seeder;

class NiveausTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Niveau::class, 30)->create();
    }
}
