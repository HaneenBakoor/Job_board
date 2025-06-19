<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'nexa@admin.com',
            'password' => Hash::make(123456789),
            'role'=>'admin'
        ]);
        User::factory()->create([
            'name' => 'editor',
            'email' => 'nexa@editor.com',
            'password' => Hash::make(123456789),
            'role'=>'editor'
        ]);

    }
}
