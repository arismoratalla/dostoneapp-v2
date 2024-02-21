<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_employee = Role::create(['name' => 'employee']);
        $role_officer = Role::create(['name' => 'officer']);
        $role_chief = Role::create(['name' => 'chief']);
        $role_oic_chief = Role::create(['name' => 'oic-chief']);
        $role_director = Role::create(['name' => 'director']);
        $role_oic_director = Role::create(['name' => 'oic-director']);

        // Leave Permissions
        $leave_create = Permission::create(['name' => 'create-leave']);
        $leave_read = Permission::create(['name' => 'read-leave']);
        $leave_update = Permission::create(['name' => 'update-leave']);
        $leave_delete = Permission::create(['name' => 'delete-leave']);

        $leave_submit = Permission::create(['name' => 'submit-leave']);
        $leave_validate = Permission::create(['name' => 'validate-leave']);
        $leave_recommend = Permission::create(['name' => 'recommend-leave']);
        $leave_approve = Permission::create(['name' => 'approve-leave']);
        $leave_disapprove = Permission::create(['name' => 'disapprove-leave']);

        // $role_admin->givePermissionTo(Permission::all());
        $permissions_admin = [
            $leave_create, $leave_read, $leave_update, $leave_delete, $leave_submit, $leave_validate, $leave_recommend, $leave_approve, $leave_disapprove
        ];
        $role_admin->syncPermissions($permissions_admin);

        $permissions_employee = [
            $leave_create, $leave_read, $leave_update, $leave_delete, $leave_submit,
        ];
        $role_employee->syncPermissions($permissions_employee);

        $permissions_officer = [
            $leave_read, $leave_update, $leave_validate,
        ];
        $role_officer->syncPermissions($permissions_officer);

        $permissions_chief = [
            $leave_read, $leave_update, $leave_recommend, $leave_disapprove,
        ];
        $role_chief->syncPermissions($permissions_chief);
        $role_oic_chief->syncPermissions($permissions_chief);

        $permissions_director = [
            $leave_read, $leave_update, $leave_approve, $leave_disapprove,
        ];
        $role_director->syncPermissions($permissions_director);
        $role_oic_director->syncPermissions($permissions_director);

        // Get Role object, then assign it 
        // $role = Role::findByName('admin','web');
        // $admin = User::find(1);
        // $admin->assignRole('admin');

        // $role = Role::findByName('employee','web');
        // $employee = User::find(2);
        // $employee->assignRole($role);
        
        // $role = Role::findByName('officer','web');
        // $officer = User::find(3);
        // $officer->assignRole($role);

        // $role = Role::findByName('chief','web');
        // $chief = User::find(4);
        // $chief->assignRole($role);
        
        // $role = Role::findByName('director','web');
        // $director = User::find(5);
        // $director->assignRole($role);
    }
}
