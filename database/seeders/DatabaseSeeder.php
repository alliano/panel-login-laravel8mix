<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use app\models\UserDetail;
use App\Models\Login;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          \App\Models\Login::factory(10)->create();
          \App\Models\User::factory(10)->create();
        // Login::factory()->create();
    }
}
