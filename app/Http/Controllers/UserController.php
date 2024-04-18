<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //list all users fuction
    // function userManagement() {
    //     $userData = array(
    //         $usersList = DB::table('users')
    //         ->get()
    //     );
    //     return view('index.blade.php', $userData);
    // }
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }
}
