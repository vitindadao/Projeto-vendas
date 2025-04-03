<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
  
    public function run(): void
    {
        $user = User::create([
            
            'email' => 'admin@teste.com',
            'password' => Hash::make('123456'),
            'user_type' => 'admin'
        ]);

        Admin::create([
            'nome' => 'Administrador',
            'cpf' => '1112223345',
           'user_id' => $user->id
        ]);

    
    
    }
}
