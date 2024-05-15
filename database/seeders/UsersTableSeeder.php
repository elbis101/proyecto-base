<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'osmar olguin medina',
            'email' =>'osmarolguinmedina@gmail.com',
            'email_verified_at' => now(),
            'password' =>bcrypt('Jjossue03.19'),
            'dni' => '7194332',
            'address' =>'av. 4 de julio',
            'phone' => '68701564',
            'role' => 'admin',
           




        ]);
        User::factory()
            ->count(50)
            ->create();
    }
}
