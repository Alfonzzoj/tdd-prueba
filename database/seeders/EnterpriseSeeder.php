<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enterprise;

class EnterpriseSeeder extends Seeder
{
  public function run()
  {
    Enterprise::factory(100)->create();
  }
}
