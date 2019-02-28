<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert($data = array(
            [
                'name'=> 'Activo(a)',
                'slug'=> 'activo',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Inactivo(a)',
                'slug'=> 'inactivo',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Recibida',
                'slug'=> 'recibida',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Procesando',
                'slug'=> 'procesado',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Finalizado',
                'slug'=> 'finalizado',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Pagada',
                'slug'=> 'pagada',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ]
            )

        );
    }
}
