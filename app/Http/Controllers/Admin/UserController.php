<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserCreateRequest;
use App\Http\Requests\Users\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserCreateRequest $request)
    {
        $data = $request->validated();
        $data['password'] = hash::make('password');

        User::create($data);

        return to_route('users.index')->with('success', 'کاربر جدید با موفقیت ایجاد شد.');
    }

    public function show(User $user){}
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        return to_route('users.index')->with('success', 'کاربر جدید با موفقیت به روز رسانی ایجاد شد.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'کاربر جدید با موفقیت حذف ایجاد شد.');
    }
}
