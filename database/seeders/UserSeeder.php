<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)->create();

        User::factory()->create([
            'name' => 'imam',
            'email' => 'imam@idn.com',
            'password' => Hash::make('11111111'),
            'role' => 'admin',
            'phone' => '081298990811',
        ]);
    }
}
