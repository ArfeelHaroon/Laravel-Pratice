<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SpatieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles_permissions.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $writerPermissions = Permission::where('group', 'writer')->get();
        $AdminPermissions = Permission::where('group', 'admin')->get();
        return view('roles_permissions.create', compact('writerPermissions', 'AdminPermissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = new Role;
        $role->name = $request->name;
        $role->title = $request->title;
        $role->is_deleteable = '1';
        $role->save();
        $permissions = $request->checkbox;
        $role->syncPermissions($permissions);
        return redirect()->route('roles.index')->with('success', 'Role created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $adminPermissions = Permission::where('group', 'admin')->get();
        $writerPermissions = Permission::where('group', 'writer')->get();
        $role = Role::findById($id);
        $roleName = $role->name;
        $roleTitle = $role->title;
        $asignedPermission = $role->permissions->pluck('name')->toArray();


        return view('roles_permissions.edit', compact('asignedPermission', 'roleName', 'roleTitle', 'adminPermissions', 'writerPermissions', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->title = $request->title;
        $role->save();
        $permissions = $request->checkbox;
        $role->syncPermissions($permissions);
        return redirect()->route('roles.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        $permission = Permission::all();
        $role->revokePermissionTo($permission);
        return redirect()->route('roles.index')->with('deleted', 'Role has been deleted');
    }
}