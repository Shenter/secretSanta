<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User(['name'=>'admin', 'password'=>bcrypt('admin'),'email'=>'admin@admin.com']);
        $admin->save();
    }
}
