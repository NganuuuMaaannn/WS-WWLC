<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Hash;
use Spatie\Permission\Traits\HasRoles;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
            'name' => 'Admin',
            'email' => 'wwlc_admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
        $role = Role::create([
            'slug' => 'admin',
            'name' => 'Adminstrator',
        ]);
        $user->roles()->sync($role->id);
    }
}
