<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@supplier.test'],
            ['name' => 'Supplier Admin', 'password' => 'Supplier123!'],
            
            
        );

         User::updateOrCreate(
            ['email' => 'dede@supplier.bos'],
            ['name' => 'Supplier bos', 'password' => 'Dedeganteng123'],
            
            
        );
    }
}
