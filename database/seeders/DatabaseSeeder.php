<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Group;
use \App\Models\Flag;
use \App\Models\Unit;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Group::factory(40)->create();
        Flag::factory(40)->create();
        Unit::factory(40)->create();
        Employee::factory(40)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> '12345678',
        ]);
    }
}
