<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call(RoleSeeder::class);
    $this->call(UserSeeder::class);
    $this->call(ItemSeeder::class);
    $this->call(EnterpriseSeeder::class);
    $this->call(PaymentMethodSeeder::class);
    $this->call(PaymentConditionSeeder::class);
    $this->call(LicenseSeeder::class);
    $this->call(ClientSeeder::class);
    $this->call(AccountStatementSeeder::class);
  }
}
