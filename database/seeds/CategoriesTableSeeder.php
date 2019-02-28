<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($data = array(
            [
                'name'=> 'Platano',
                'slug'=> 'platano',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Yuca',
                'slug'=> 'yuca',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Aji',
                'slug'=> 'aji',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Carne de Res',
                'slug'=> 'carne-de-res',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Carne de Cerdo',
                'slug'=> 'carne-de-cerdo',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ]
        )

        );
    }
}
