<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['id' => 1,'name'=>'admin','email'=>'admin1@gmail.com','username'=>'admin','password'=>bcrypt('admin'), 'role' => 'Admin','created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
            ['id' => 2,'name'=>'user','email'=>'user1@gmail.com','username'=>'user','password'=>bcrypt('user'), 'role' => 'User','created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        ];

        User::insert($users);
        User::factory(10)->create();
        Menu::factory(15)->create();
    }
}
