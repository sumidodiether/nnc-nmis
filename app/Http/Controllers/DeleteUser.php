<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DeleteUser extends Controller
{
    //delete users function
    function delete() {
        $id = $_GET['id'];

        $userDataDelete = array(
            'usersDelete' => DB::table('users')
            -where('id',$id)
            ->delete()
        );
        return view('users.index', $userDataDelete);
    }

}
