<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Traits\HasRoles;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name'=>'list Blog Posts']);
        Permission::create(['name'=>'create Blog Posts']);
        Permission::create(['name'=>'store Blog Posts']);
        Permission::create(['name'=>'show Blog Posts']);
        Permission::create(['name'=>'edit Blog Posts']);
        Permission::create(['name'=>'update Blog Posts']);
        Permission::create(['name'=>'delete Blog Posts']);

        $role1 = Role::create(['name'=>'Writer']);
        $role1->givePermissionTo('list Blog Posts');
        $role1->givePermissionTo('create Blog Posts');
        $role1->givePermissionTo('store Blog Posts');
        $role1->givePermissionTo('show Blog Posts');

        $role2 = Role::create(['name'=>'Admin']);
        $role2->givePermissionTo('list Blog Posts');
        $role2->givePermissionTo('create Blog Posts');
        $role2->givePermissionTo('store Blog Posts');
        $role2->givePermissionTo('show Blog Posts');
        $role2->givePermissionTo('edit Blog Posts');
        $role2->givePermissionTo('update Blog Posts');

        $role3 = Role::create(['name'=>'Super-Admin']);

        $user = User::factory()->create([
            'name'=>'Writer User',
            'email' => 'writer@letsgipe.com',
        ]);
        $user->assignRole($role1);

        $user = User::factory()->create([
            'name'=>'Admin User',
            'email' => 'admin@letsgipe.com',
        ]);
        $user->assignRole($role2);


        $user = User::factory()->create([
            'name'=>'Super Admin User',
            'email' => 'superadmin@letsgipe.com',
        ]);
        $user->assignRole($role3);
    }
}
