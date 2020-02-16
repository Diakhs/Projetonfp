<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdministrateursTableSeeder::class);
        $this->call(CoursTableSeeder::class);
        $this->call(EcoliersTableSeeder::class);
        $this->call(InscriptionsTableSeeder::class);
        $this->call(MatieresTableSeeder::class);
        $this->call(NiveausTableSeeder::class);
        $this->call(ProfesseursTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(SallesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
