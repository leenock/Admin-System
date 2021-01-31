<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'dummy-list',
            'dummy-create',
            'dummy-edit',
            'dummy-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'student-list',
            'student-create',
            'student-edit',
            'student-delete',
            'student-finance-list',
            'student-finance-create',
            'student-finance-edit',
            'student-finance-delete',
            'course-finance-list',
            'course-finance-create',
            'course-finance-edit',
            'course-finance-delete'

            ];
            foreach ($permissions as $permission) {
                Permission::create(['name' => $permission]);
                }       

    }
}
