<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'admin@admin.com')->first()){
            User::create([
                'name' => 'Adm',
                'last_name' => 'Administrador',
                'email' => 'admin@admin.com',
                'password' => Hash::make('adm123', ['rounds' => 12])
            ]);
        }
    }
}