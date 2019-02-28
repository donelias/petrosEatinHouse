<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        DB::table('permissions')->insert($data = array(
            [
                'name'=> 'Navegar usuarios',
                'slug'=> 'users.index',
                'description' => 'Lista y navega todos los usuarios del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Ver detalle de usuario',
                'slug'=> 'users.show',
                'description' => 'Ver en detalle cada usuario del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Edicion de usuarios',
                'slug'=> 'users.edit',
                'description' => 'Editar cualquier dato de un usuario del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Eliminar de usuarios',
                'slug'=> 'users.destroy',
                'description' => 'Eliminar cualquier usuario del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );

        //roles
        DB::table('permissions')->insert($data = array(
            [
                'name'=> 'Navegar roles',
                'slug'=> 'roles.index',
                'description' => 'Lista y navega todos los roles del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Ver detalle de role',
                'slug'=> 'roles.show',
                'description' => 'Ver en detalle cada role del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
            'name'=> 'Crear usuario',
            'slug'=> 'roles.create',
            'description' => 'Crear roles del sistema',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Edicion de roles',
                'slug'=> 'roles.edit',
                'description' => 'Editar cualquier dato de un role del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Eliminar de roles',
                'slug'=> 'roles.destroy',
                'description' => 'Eliminar cualquier role del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ]));

        //products
        DB::table('permissions')->insert($data = array(
            [
                'name'=> 'Navegar productos',
                'slug'=> 'products.index',
                'description' => 'Lista y navega todos los productos del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Ver detalle de productos',
                'slug'=> 'products.show',
                'description' => 'Ver en detalle cada producto del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Crear producto',
                'slug'=> 'products.create',
                'description' => 'Crear producto del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Edicion de productos',
                'slug'=> 'products.edit',
                'description' => 'Editar cualquier dato de un producto del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Eliminar de productos',
                'slug'=> 'products.destroy',
                'description' => 'Eliminar cualquier producto del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ]));
        //orders
        DB::table('permissions')->insert($data = array(
            [
                'name'=> 'Navegar ordernes',
                'slug'=> 'orders.index',
                'description' => 'Lista y navega todos los ordernes del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Ver detalle de ordernes',
                'slug'=> 'orders.show',
                'description' => 'Ver en detalle cada orden del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Crear orden',
                'slug'=> 'orders.create',
                'description' => 'Crear orden del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Edicion de ordernes',
                'slug'=> 'orders.edit',
                'description' => 'Editar cualquier dato de un orden del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Eliminar de ordernes',
                'slug'=> 'orders.destroy',
                'description' => 'Eliminar cualquier orden del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Pagar Ordenes',
                'slug'=> 'orders.payment',
                'description' => 'Pagar orden del sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ]));
        //roles-users
        DB::table('role_user')->insert($data = array(
            [
                'role_id'=> '1',
                'user_id'=> '1',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'role_id'=> '2',
                'user_id'=> '2',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ]));
        //permission_role
        DB::table('permission_role')->insert($data = array(
            [
                'permission_id'=> '10',
                'role_id'=> '2',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'permission_id'=> '11',
                'role_id'=> '2',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'permission_id'=> '15',
                'role_id'=> '2',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'permission_id'=> '16',
                'role_id'=> '2',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ]));
    }
}
