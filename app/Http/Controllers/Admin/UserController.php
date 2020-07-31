<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function view (){
    	$user = new User();
    	$userData = $user->getUser(null)->paginate(7);
    	return view('admin.user', compact('userData'));
    }

    public function editUser(Request $request){
        $user = new User();
        $Id = $request->attrEditIdUser;
        $userDetail = $user->viewUserModal($Id);
        // dd($userDetail);
        return view('admin.modal.form_user', $userDetail);
    }
    public function updateUser(Request $request){
        $user = new User();
        $inputs = [
                'name' => $request->input('name', ''),
                'address' => $request->input('address', ''),
                'email' => $request->input('email', ''),
                'phone' => $request->input('phone', ''),
                'gender' => $request->input('gender', ''),
                'created_at' => $request->input('created_at', ''),
                'updated_at' => $request->input('updated_at', ''),
                'priority' => $request->input('priority', ''),
            ];
        $Id = $request->attrEditIdUser;

        $userDetail = $user->updateUserModal($inputs,$Id);
    }
    public function deleteUser(){

    }
    public function addUser(Request $request){
        $user = new User();
        // dd($request->all());
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName('avatar');
            $file ->move('avatar', $fileName);
        }else{
            
        }
        $inputs = [
            'name' => $request->input('name', ''),
            'address' => $request->input('address', ''),
            'email' => $request->input('email', ''),
            'phone' => $request->input('phone', ''),
            'gender' => $request->input('gender', ''),
            'created_at' => $request->input('created_at', ''),
            'updated_at' => $request->input('updated_at', ''),
            'priority' => $request->input('priority', ''),
            'avatar' => isset($fileName)? $fileName : 'avtdefaut.jpg',
        ];
        $user->postUserModel($inputs);
        return redirect()->route('quan-ly-tai-khoan')->with('success', "Đăng kí tài khoản thành công");
    }

}

