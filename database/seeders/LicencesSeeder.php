<?php

namespace Database\Seeders;

use App\Models\License;
use Database\Factories\LicenceFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LicencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LicenceFactory::factory(5)->create();
    }
}
