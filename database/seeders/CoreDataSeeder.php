<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class CoreDataSeeder extends Seeder
{
    private $permissions;
    
    public function run()
    {
        $this->createDefaultRolePermissions();
        $this->createDefaultUsers();
    }

    private function createDefaultRolePermissions()
    {
        $this->permissions = [
            ['name' => 'user.index'],
            ['name' => 'user.create'],
            ['name' => 'user.store'],
            ['name' => 'user.show'],
            ['name' => 'user.edit'],
            ['name' => 'user.update'],
            ['name' => 'user.destroy'],
            ['name' => 'permission.index'],
            ['name' => 'permission.create'],
            ['name' => 'permission.store'],
            ['name' => 'permission.show'],
            ['name' => 'permission.edit'],
            ['name' => 'permission.update'],
            ['name' => 'permission.destroy'],
            ['name' => 'permission.assign'],
            ['name' => 'permission.unassign'],
            ['name' => 'role.assign'],
            ['name' => 'role.unassign'],
            ['name' => 'role.index'],
            ['name' => 'role.create'],
            ['name' => 'role.store'],
            ['name' => 'role.show'],
            ['name' => 'role.edit'],
            ['name' => 'role.update'],
            ['name' => 'role.destroy'],
        ];

        foreach ($this->permissions as $permission) {
            Permission::create([
                'name' => $permission["name"]
            ]);
        };


        Role::create([
            'name' => 'Admin'
        ]);
        Role::create([
            'name' => 'Teacher'
        ]);
        Role::create([
            'name' => 'Doctor'
        ]);
        Role::create([
            'name' => 'Orphan'
        ]);
    }

    private function createDefaultUsers()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1234567890'),
            'remember_token' => Str::random(10),
        ])->assignRole('Admin')->givePermissionTo($this->permissions); //(Example) Given Permission to Admin
    }
}
