<?php

use Illuminate\Database\Seeder;

class EcoliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Ecolier::class, 30)->create();
    }
}
