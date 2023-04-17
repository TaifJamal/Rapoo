<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
            'project-list',
            'project-create',
            'project-edit',
            'project-delete',
            'about-list',
            'about-create',
            'about-edit',
            'about-delete',
            'neew-list',
            'neew-create',
            'neew-edit',
            'neew-delete',
            'proces-list',
            'proces-create',
            'proces-edit',
            'proces-delete',
            'testimonial-list',
            'testimonial-create',
            'testimonial-edit',
            'testimonial-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
        ];
        foreach( $permissions as  $permission){
            Permission::create([
                'name'=>$permission,
            ]);

        }
    }
}
