<?php

namespace Database\Seeders;

use App\Models\Role;
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
        //

        $role_superadmin = Role::where('name', 'superadministrator')->first();

        /**
         * VISYON TEST USERS
         */
        $role_superadmin->users()->create([
            'name' => 'Superadmin',
            'email' => 'root.cms@protonmail.com',
            'password' => bcrypt('1234567'),
        ]);

    }
}
