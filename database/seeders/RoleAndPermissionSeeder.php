<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'create-article']);
        Permission::create(['name'=>'delete-own-article']);
        Permission::create(['name'=>'edit-own-article']);
        Permission::create(['name'=>'like-article']);
        Permission::create(['name'=>'comment-article']);
        Permission::create(['name'=>'bookmark-article']);

        Permission::create(['name'=>'delete-any-article']);

        $adminRole = Role::create(['name' => 'Admin']);
        $UserRole = Role::create(['name' => 'User']);

        $adminRole->givePermissionTo([
            'delete-any-article',
            'create-article',
            'like-article',
            'comment-article',
            'edit-own-article',

        ]);

        $UserRole->givePermissionTo([
            'delete-own-article',
            'create-article',
            'like-article',
            'comment-article',
            'edit-own-article',
            'bookmark-article',
        ]);
        // Assign roles to users based on 'usertype'
        $usersWithAdminRole = User::where('usertype', 'admin')->get();
        foreach ($usersWithAdminRole as $user) {
            $user->assignRole('Admin');
        }

        $usersWithUserRole = User::where('usertype', 'user')->get();
        foreach ($usersWithUserRole as $user) {
            $user->assignRole('User');
        }
        


    }
}
