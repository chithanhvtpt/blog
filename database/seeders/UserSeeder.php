<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "Admin@gmail.com";
        $user->phone = "0352359396";
        $user->password = bcrypt("admin");
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = "Chí Thành";
        $user->email = "chithanhvtpt@gmail.com";
        $user->phone = "0352359396";
        $user->password = bcrypt("pengalx1");
        $user->role_id = 2;
        $user->save();
    }
}
