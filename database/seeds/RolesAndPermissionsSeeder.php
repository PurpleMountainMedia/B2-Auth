<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // Roles Permissions
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'read roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        // Permissions Permissions
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'read permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        // Subscriptions Permissions
        Permission::create(['name' => 'create subscriptions']);
        Permission::create(['name' => 'read subscriptions']);
        Permission::create(['name' => 'update subscriptions']);
        Permission::create(['name' => 'delete subscriptions']);

        // Plans Permissions
        Permission::create(['name' => 'create plans']);
        Permission::create(['name' => 'read plans']);
        Permission::create(['name' => 'update plans']);
        Permission::create(['name' => 'delete plans']);

        // Organisations Permissions
        Permission::create(['name' => 'create organisations']);
        Permission::create(['name' => 'read organisations']);
        Permission::create(['name' => 'update organisations']);
        Permission::create(['name' => 'delete organisations']);

        // Users Permissions
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // Schools Permissions
        Permission::create(['name' => 'create schools']);
        Permission::create(['name' => 'read schools']);
        Permission::create(['name' => 'update schools']);
        Permission::create(['name' => 'delete schools']);

        // Reports Permissions
        Permission::create(['name' => 'create reports']);
        Permission::create(['name' => 'read reports']);
        Permission::create(['name' => 'update reports']);
        Permission::create(['name' => 'delete reports']);

        // API Tokens
        Permission::create(['name' => 'create api-tokens']);
        Permission::create(['name' => 'read api-tokens']);
        Permission::create(['name' => 'update api-tokens']);
        Permission::create(['name' => 'delete api-tokens']);

        // Extra Permissions
        Permission::create(['name' => 'log in as user']);
        Permission::create(['name' => 'read dev tools']);


        // Developer
        $role = Role::create([
          'name' => 'developer', 'level' => 5, 'description' => 'Can interact with our API and developer tools.'
        ]);

        $role->givePermissionTo('create api-tokens');
        $role->givePermissionTo('read api-tokens');
        $role->givePermissionTo('delete api-tokens');

        $role->givePermissionTo('read dev tools');

        // Super Admin
        $role = Role::create([
          'name' => 'super admin', 'level' => 10, 'description' => 'Works for Education Inventory.'
        ]);
        $role->givePermissionTo('create roles');
        $role->givePermissionTo('read roles');
        $role->givePermissionTo('update roles');
        $role->givePermissionTo('delete roles');

        $role->givePermissionTo('create permissions');
        $role->givePermissionTo('read permissions');
        $role->givePermissionTo('update permissions');
        $role->givePermissionTo('delete permissions');

        $role->givePermissionTo('create subscriptions');
        $role->givePermissionTo('read subscriptions');
        $role->givePermissionTo('update subscriptions');
        $role->givePermissionTo('delete subscriptions');

        $role->givePermissionTo('create plans');
        $role->givePermissionTo('read plans');
        $role->givePermissionTo('update plans');
        $role->givePermissionTo('delete plans');

        $role->givePermissionTo('create organisations');
        $role->givePermissionTo('read organisations');
        $role->givePermissionTo('update organisations');
        $role->givePermissionTo('delete organisations');

        $role->givePermissionTo('create users');
        $role->givePermissionTo('read users');
        $role->givePermissionTo('update users');
        $role->givePermissionTo('delete users');

        $role->givePermissionTo('create schools');
        $role->givePermissionTo('read schools');
        $role->givePermissionTo('update schools');
        $role->givePermissionTo('delete schools');

        $role->givePermissionTo('create reports');
        $role->givePermissionTo('read reports');
        $role->givePermissionTo('update reports');
        $role->givePermissionTo('delete reports');

        $role->givePermissionTo('log in as user');

        // Org Admin
        $role = Role::create([
          'name' => 'organisation admin', 'level' => 6, 'description' => 'In charge of an organisation.'
        ]);


        $role->givePermissionTo('read permissions');

        $role->givePermissionTo('create subscriptions');
        $role->givePermissionTo('read subscriptions');
        $role->givePermissionTo('update subscriptions');
        $role->givePermissionTo('delete subscriptions');

        $role->givePermissionTo('read plans');

        $role->givePermissionTo('read organisations');
        $role->givePermissionTo('update organisations');
        $role->givePermissionTo('delete organisations');

        $role->givePermissionTo('create users');
        $role->givePermissionTo('read users');
        $role->givePermissionTo('update users');
        $role->givePermissionTo('delete users');

        $role->givePermissionTo('create schools');
        $role->givePermissionTo('read schools');
        $role->givePermissionTo('update schools');
        $role->givePermissionTo('delete schools');

        $role->givePermissionTo('create reports');
        $role->givePermissionTo('read reports');
        $role->givePermissionTo('update reports');
        $role->givePermissionTo('delete reports');

        $role = Role::create([
          'name' => 'organisation user', 'level' => 4, 'description' => 'General organisation user.'
        ]);

        $role->givePermissionTo('read subscriptions');

        $role->givePermissionTo('read plans');

        $role->givePermissionTo('read organisations');

        $role->givePermissionTo('read users');
        $role->givePermissionTo('update users');

        $role->givePermissionTo('read schools');
        $role->givePermissionTo('update schools');

        $role->givePermissionTo('create reports');
        $role->givePermissionTo('read reports');
        $role->givePermissionTo('update reports');
    }
}
