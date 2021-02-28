<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\User;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        # permissions
        Permission::create(['name' => 'Update Password']);
        Permission::create(['name' => 'Update Profile']);
        Permission::create(['name' => 'Delete User']);
        Permission::create(['name' => 'Create User']);
        Permission::create(['name' => 'Approve User']);
        Permission::create(['name' => 'Create Post']);
        Permission::create(['name' => 'Edit Post']);
        Permission::create(['name' => 'Update Post']);
        Permission::create(['name' => 'Delete Post']);

        # roles
        Role::create(['name' => 'User'])->givePermissionTo([
            'Create Post', 'Update Profile', 'Update Password', 'Update Profile', 'Edit Post', 'Delete Post'
        ]);
        /*
        Role::create(['name' => 'Editor'])->givePermissionTo([
            'Edit Post', 'Update Post', 'Delete Post'
        ]);
        */
        //Role::create(['name' => 'Admin']);//->givePermissionTo('make-orders');
        Role::create(['name' => 'Admin'])->givePermissionTo([
            'Update Password', 'Update Profile', 'Create User', 'Delete User', 'Approve User'
        ]);
        
        # users
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'status' => '1',
            'username' => uniqid(),
            'password'  => Hash::make('1234')
        ])->assignRole('Admin');

        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'status' => '0',
            'username' => uniqid(),
            'password'  => Hash::make('1234')
        ])->assignRole('User');

        /*
        User::create([
            'name' => 'Editor',
            'email' => 'editor@mail.com',
            'status' => '0',
            'password'  => Hash::make('1234')
        ])->assignRole('Editor');
        */
    }
}
