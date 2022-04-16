<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;
use Alert;
use App\Models\User;
use Spatie\Permission\Contracts\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('role.index');
        $roles = ModelsRole::with('permissions')->get();
        return view('dashboard.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('role.create');
        $permissions = Permission::all();
        return view('dashboard.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
