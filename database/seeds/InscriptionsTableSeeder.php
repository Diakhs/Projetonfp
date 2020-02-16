<?php

use Illuminate\Database\Seeder;

class InscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Inscription::class, 30)->create();
    }
}
