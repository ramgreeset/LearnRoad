<?php

namespace Database\Seeders;

use App\Models\Term;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{

    public function run(): void
    {
        Term::truncate();
//        Term::factory()->create();
    }
}
