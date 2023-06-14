<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function  userTable()
    {
        $data = User::get();
        return view('admin.user', compact('data'));

        // return view('admin.user');

    }

    // delete user

    public function deleteUser($id)
    {
        $delete_user = User::find($id);
        $delete_user->delete();

        return back()->with('danger', 'Deleted User Successfully');
    }
}
