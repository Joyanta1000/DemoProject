<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Alert;

class PermissionController extends Controller
{

    public function index()
    {
        $this->authorize('permission.index');
        $permissions = Permission::all();
        return view('dashboard.permission.index', compact('permissions'));
    }

    public function create()
    {
        $this->authorize('permission.create');
        return view('dashboard.permission.create');
    }

    public function store(Request $request)
    {
        $this->authorize('permission.store');

        $rules = [
            'name' => 'required|unique:permissions,name',
        ];

        $messages = [
            'name.required' => 'Permission name is required',
            'name.unique' => 'Permission name must be unique',
        ];

        $this->validate($request, $rules, $messages);

        Permission::create([
            'name' => $request->input('name')
        ]);

        Alert::success('Congrats', 'Permissions created successfully')->autoclose(3500);

        return back();
    }

    public function permissionAssign()
    {
    // $this->authorize('permission.assign');
    $roles = Role::all();
    $permissions = Permission::limit(5)->get();
    // get 5 permissions
    return view('dashboard.permission.assign', compact('roles', 'permissions'));
    }

    public function storeAssign(Request $request)
    {
    // $this->authorize('pernission.assign');

    Role::findOrFail($request->input('role'))
    ->syncRoles($request->input('roles'));

    Alert::success('Congrats', 'Role assigned successfully')->autoclose(3500);

    return back();
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
