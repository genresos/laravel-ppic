<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function index(Request $request)
    {

        if($request->has('search')){
            $users = User::where('username',  'LIKE', '%'. $request->search .'%')->paginate(4);
            return view('user.index', compact('users'));
        }
        $users = User::paginate(4);
        return view('user.index', compact('users'));
    }

    public function store(Request $request)
    {

        $request['password'] = bcrypt($request->all);
        // $this->validate($request,[
        //     'username'   =>  'required|string|max:255|min:0',
        //     'nama_lengkap'    =>  'required|string|max:255',
        //     'password'    =>  bcrypt($request->all),
        // ]);
        User::create($request->all());
        return redirect()->route('user-index');
    }
    public function create()
    {
            return view('user.create') ;
    }

    public function edit($username)
    {
        $user = User::where('username', $username)->first();

        if($user){
            return view('user.edit', compact('user'));
        }
    }

    public function update(Request $request, $username)
    {
        $user = User::where('username', $username)->first();

        if($user)
        {
            $request['password'] = bcrypt($request->password);
            User::where('username', $username)->update($request->only('username', 'nama_lengkap', 'level', 'password'));

            return redirect()->route('user-index');
        }
        abort(403);
    }

    public function delete($username)
    {
        User::where('username', $username)->delete();
        return redirect()->route('user-index');

    }
}
