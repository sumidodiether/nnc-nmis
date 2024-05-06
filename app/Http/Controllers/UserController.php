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
    //     try {
    //     $addUser->validate([
    //         'nameAdd_User' => 'required|string|max:255',
    //         // 'emailAdd_User' => 'required|email|unique:users|max:255',
    //         // 'passwordAdd_User' => 'required|string|min:8',
    //     ]);

    //     $nameAddUser = $request->input('nameAdd_User');
    //     $emailAddUser = $request->input('emailAdd_User');
    //     $passwordAddUser = bcrypt($request->input('passwordAdd_User'));

    //     // user::create([

    //     //     'name' => $nameAddUser,
    //     //     'email' => $emailAddUser,
    //     //     'password' => $passwordAddUser,
    //     // ]);

    //     $addNewUser = new User;

    //     $addNewUser->name=$request->input('nameAdd_User');
    //     var_dump($addNewUser->name); die();
        
    //     $addNewUser->save();

    //     return redirect()->route('users.index')->with('success', 'User created successfully.');
    // } catch (\Exception $e) {
    //     return redirect()->back()->with('error', 'An error occurred while creating the user: ' . $e->getMessage());
    // }
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
