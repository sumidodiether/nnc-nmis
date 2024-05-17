<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //list all users fuction
    public function index() {
        $userData = array(
            'usersList' => DB::table('users')
            ->get()
        );
        return view('users.index', $userData);
    }

     //delete users function

    public function destroy($id) {
        $data = user::findOrFail($id);

        $data->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    //add user function

    public function store(Request $request) {
        try {
            //code...
            $addNewUser = new user;

            $addNewUser->name=$request->input('nameAdd_User');
            $addNewUser->email=$request->input('emailAdd_User');
            $addNewUser->password=$request->input('passwordAdd_User');
        
            $addNewUser->save();
            return redirect()->back()->with('success', 'User created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            return "An error occurred: " . $th->getMessage();
        }
    }

    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    // public function index(User $model)
    // {
    //     return view('users.index', ['users' => $model->paginate(15)]);
    // }
}
