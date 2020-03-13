<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user =  User::orderby('id','desc')->get();
        return view('usercrud\user',['user'=>$user,]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
    }
    public function show($id)
    {
        return User::findOrFail($id);
    }
    public function edit($id)
    {
        $userEdit = User::findorFail($id);
        return view('usercrud\edit',['update'=>$userEdit,]);
    }
    public function update(Request $request, $id)
    {
        $userUpdate = User::findorFail($id);
        $userUpdate->studentid = $request ->input('studentid');
        $userUpdate->email = $request ->input('Email');
        $userUpdate->password = $request ->input('password');
        $userUpdate->save();
        return redirect()->to('usercrud\user');
    }
    public function destroy($id)
    {
        //
    }
}
