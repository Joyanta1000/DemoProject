<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;
use Alert;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Role;

class RoleController extends Controller
{

    public function index()
    {
        $this->authorize('role.index');
        $roles = ModelsRole::with('permissions')->get();
        return view('dashboard.role.index', compact('roles'));
    }

    public function create()
    {
        $this->authorize('role.create');
        $permissions = Permission::all();
        return view('dashboard.role.create', compact('permissions'));
    }

    public function store(Request $request)
    {

        $this->authorize('role.store');

        $rules = [
            'name' => 'required|unique:roles,name',
            'permissions' => 'required',
        ];

        $messages = [
            'name.required' => 'Role name is required',
            'name.unique' => 'Role name must be unique',
            'permissions.required' => 'Permissions are required',
        ];

        $this->validate($request, $rules, $messages);

        ModelsRole::create([
            'name' => $request->input('name')
        ])->syncPermissions($request->input('permissions'));

        Alert::success('Congrats', 'Role created and permissions given successfully')->autoclose(3500);

        return back();
    }

    public function roleAssign()
    {
        // $this->authorize('role.assign');
        $users = User::all();
        $roles = ModelsRole::all();
        return view('dashboard.role.assign', compact('users', 'roles'));
    }

    public function storeAssign(Request $request)
    {
        // $this->authorize('role.assign');

        User::findOrFail($request->input('user'))
            ->syncRoles($request->input('roles'));

        Alert::success('Congrats', 'Role assigned successfully')->autoclose(3500);

        return back();
    }

    public function show(Role $role)
    {
        
    }

    public function edit(ModelsRole $role)
  
    {
        $this->authorize('role.edit');
        $permissions = Permission::all();
        return view('dashboard.role.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, ModelsRole $role)
    {
        $this->authorize('role.edit');

        $rules = [
            'permissions' => 'required',
        ];

        $messages = [
            'permissions.required' => 'Permissions are required',
        ];

        $this->validate($request, $rules, $messages);
        $role->syncPermissions($request->input('permissions'));
        Alert::success('Congrats', 'Permission updated successfully')->autoclose(3500);
        return back();
    }

    public function destroy(Role $role)
    {
        
    }
}
