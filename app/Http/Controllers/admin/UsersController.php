<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index()
    {
        // //abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (Auth::user()->role_id != 1) {
            return redirect('/403');
        }
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        //abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (Auth::user()->role_id != 1) {
            return redirect('/403');
        }
        // $roles = Role::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        if (Auth::user()->role_id != 1) {
            return redirect('/403');
        }
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        //abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $roles = Role::all()->pluck('title', 'id');

        // $user->load('roles');
        if (Auth::user()->role_id != 1) {
            return redirect('/403');
        }
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        if (Auth::user()->role_id != 1) {
            return redirect('/403');
        }
        // dd($request);
        $user->update($request->all());
        // $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        //abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        //abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();

        return back();
    }
}
