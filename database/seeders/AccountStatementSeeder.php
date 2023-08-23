<?php

namespace Database\Seeders;

use App\Models\AccountStatement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountStatementSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    AccountStatement::factory(50)->create();
  }
}
