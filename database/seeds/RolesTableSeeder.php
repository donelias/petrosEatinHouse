<?php

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert($data = array(
             [
                'name'=> 'Admin',
                'slug'=> 'admin',
                'special' => 'all-access',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ]
            )

        );
    }
}
