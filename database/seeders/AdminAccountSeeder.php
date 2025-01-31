<?php

namespace Database\Seeders;

use App\Laravel\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cred = User::where('name', 'SUPER ADMIN')->where('email', 'admin@gmail.com')->first();

        if(!$cred){
            $user = new User;
            $user->name = "SUPER ADMIN";
            $user->type = "master_admin";
            $user->email = "admin@gmail.com";
            $user->password = bcrypt("admin");
            $user->save();
        }
    }
}
