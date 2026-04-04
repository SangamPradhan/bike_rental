<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Password';
        $this->resources = 'admin.reset-passwords.';
        $this->route = 'reset-passwords.';
    }



    public function edit($id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->hasRole('admin') || auth()->user()->id === $user->id) {
            $isReset = true;
        } else {
            abort(403);
        }

        $info = $this->crudInfo();
        $info['item'] = $user;
        $info['isReset'] = $isReset ?? false;

        return view($this->editResource(), $info);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();

        if (auth()->user()->hasRole('staff')) {
            return redirect()->route('profile')->with('success', 'Password updated successfully.');
        } else {
            return redirect()->route('users.index')->with('success', 'Password updated successfully.');
        }
    }
}
