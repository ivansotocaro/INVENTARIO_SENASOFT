<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermisionsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Rol usuario
        Permission::create([
             'name'        => 'navegar usuarios',
             'slug'        => 'user.index',
             'description' => 'lista y navega',
        ]);

        Permission::create([
            'name'        => 'ver usuario',
            'slug'        => 'user.show',
            'description' => 'ver',
       ]);

       Permission::create([
           'name'        => 'Editar usuario',
           'slug'        => 'user.edit',
           'description' => 'editar',
        ]);

        Permission::create([
            'name'        => 'Eliminar usuario',
            'slug'        => 'user.destroy',
            'description' => 'eliminar',
        ]);


          //Rol Role
        Permission::create([
            'name'        => 'navegar roles',
            'slug'        => 'roles.index',
            'description' => 'lista y navega',
       ]);

        Permission::create([
           'name'        => 'ver roles',
           'slug'        => 'roles.show',
           'description' => 'ver',
        ]);

        Permission::create([
            'name'        => 'Crear roles',
            'slug'        => 'roles.create',
            'description' => 'crear',
        ]);

      Permission::create([
            'name'        => 'editar roles',
            'slug'        => 'roles.edit',
            'description' => 'editar',
       ]);

       Permission::create([
           'name'        => 'Eliminar roles',
           'slug'        => 'roles.destroy',
           'description' => 'eliminar',
       ]);


         //Rol Bodega
        Permission::create([
            'name'        => 'navegar bodega',
            'slug'        => 'bodega.index',
            'description' => 'lista y navega',
       ]);

        Permission::create([
           'name'        => 'ver bodega',
           'slug'        => 'bodega.show',
           'description' => 'ver',
        ]);

        Permission::create([
            'name'        => 'Crear bodega',
            'slug'        => 'bodega.create',
            'description' => 'crear',
        ]);

      Permission::create([
            'name'        => 'editar bodega',
            'slug'        => 'bodega.edit',
            'description' => 'editar',
       ]);

       Permission::create([
           'name'        => 'Eliminar bodega',
           'slug'        => 'bodega.destroy',
           'description' => 'eliminar',
       ]);

        //Rol Provedores
        Permission::create([
            'name'        => 'navegar provedor',
            'slug'        => 'provedor.index',
            'description' => 'lista y navega',
       ]);

        Permission::create([
           'name'        => 'ver provedor',
           'slug'        => 'provedor.show',
           'description' => 'ver',
        ]);

        Permission::create([
            'name'        => 'Crear provedor',
            'slug'        => 'provedor.create',
            'description' => 'crear',
        ]);

        Permission::create([
            'name'        => 'editar provedor',
            'slug'        => 'provedor.edit',
            'description' => 'editar',
       ]);

         Permission::create([
           'name'        => 'Eliminar provedor',
           'slug'        => 'provedor.destroy',
           'description' => 'eliminar',
       ]);

        //Rol Productos
        Permission::create([
            'name'        => 'navegar product',
            'slug'        => 'product.index',
            'description' => 'lista y navega',
       ]);

        Permission::create([
           'name'        => 'ver product',
           'slug'        => 'product.show',
           'description' => 'ver',
        ]);

        Permission::create([
            'name'        => 'Crear product',
            'slug'        => 'product.create',
            'description' => 'crear',
        ]);

        Permission::create([
            'name'        => 'editar product',
            'slug'        => 'product.edit',
            'description' => 'editar',
       ]);

         Permission::create([
           'name'        => 'Eliminar product',
           'slug'        => 'product.destroy',
           'description' => 'eliminar',
       ]);

         //Rol Sucursales
         Permission::create([
            'name'        => 'navegar sucursal',
            'slug'        => 'sucursal.index',
            'description' => 'lista y navega',
       ]);

        Permission::create([
           'name'        => 'ver sucursal',
           'slug'        => 'sucursal.show',
           'description' => 'ver',
        ]);

        Permission::create([
            'name'        => 'Crear sucursal',
            'slug'        => 'sucursal.create',
            'description' => 'crear',
        ]);

        Permission::create([
            'name'        => 'editar sucursal',
            'slug'        => 'sucursal.edit',
            'description' => 'editar',
       ]);

         Permission::create([
           'name'        => 'Eliminar sucursal',
           'slug'        => 'sucursal.destroy',
           'description' => 'eliminar',
       ]);

        //Rol Factura
        Permission::create([
            'name'        => 'navegar factura',
            'slug'        => 'factura.index',
            'description' => 'lista y navega',
       ]);

        Permission::create([
           'name'        => 'ver factura',
           'slug'        => 'factura.show',
           'description' => 'ver',
        ]);

        Permission::create([
            'name'        => 'Crear factura',
            'slug'        => 'factura.create',
            'description' => 'crear',
        ]);

        Permission::create([
            'name'        => 'editar factura',
            'slug'        => 'factura.edit',
            'description' => 'editar',
       ]);

         Permission::create([
           'name'        => 'Eliminar factura',
           'slug'        => 'factura.destroy',
           'description' => 'eliminar',
       ]);

         //Rol Empresa
         Permission::create([
            'name'        => 'navegar empresa',
            'slug'        => 'empresa.index',
            'description' => 'lista y navega',
       ]);

        Permission::create([
           'name'        => 'ver empresa',
           'slug'        => 'empresa.show',
           'description' => 'ver',
        ]);

        Permission::create([
            'name'        => 'Crear empresa',
            'slug'        => 'empresa.create',
            'description' => 'crear',
        ]);

        Permission::create([
            'name'        => 'editar empresa',
            'slug'        => 'empresa.edit',
            'description' => 'editar',
       ]);

         Permission::create([
           'name'        => 'Eliminar empresa',
           'slug'        => 'empresa.destroy',
           'description' => 'eliminar',
       ]);

        }
}
