<?php

namespace Database\Seeders;

use App\Models\InviteCode;
use Illuminate\Database\Seeder;

class InviteCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InviteCode::factory(10)->create();
    }
}
