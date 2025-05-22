<?php

namespace Database\Seeders;

use App\Models\Jobs;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(5)->create();

        Jobs::factory(20)
        ->hasAttached($tags)
        ->create();
    }
}
