<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\signupRequest;
use App\User;
use Auth;
use Validator;

class AdminController extends Controller
{
    public function checkLoginForm(Request $request){
        $data['email']= $request->input('email', '');
        $data['pass'] = $request->input('pass','');
    	if($request->isMethod('post')){
			$credentials = $request->only('email', 'password');
	    	if (Auth::attempt($credentials)) {
	            return redirect()->intended('home')->with('user',Auth::user());
	            // return redirect()->intended('home');
	            // return view('home',['user'=>Auth::user()]);
	        }else{
	        	//$error= "Đăng nhập thất bại";
	        	return view('auth.login',['error'=>"Đăng nhập thất bại. Thử lại nhé!"], $data);
	        }
    	}
        return view('auth.login', $data);
    }

    public function CheckRegisterForm(Request $request)
    {
        $msg = [];
        $rules = [];
        $data['msgErrors'] = '';
        $inputs = [
                'priority' => $request->input('priority', ''),
                'name' => $request->input('name', ''),
                'email' => $request->input('email', ''),
                'pass' => $request->input('pass', ''),
                'pass_confirmation' => $request->input('pass_confirmation', '')
        ];
    	if($request->isMethod('post')){
            $users = new User();
            $signupRequest = new signupRequest();
            $rules =  $signupRequest -> rules();
            $msg =  $signupRequest ->messages();
            $validator = Validator::make($request->all(), $rules, $msg);

            if(!$validator->fails()) // nếu k có lỗi
            {
                $inputs['pass']=bcrypt($inputs['pass']);
                $users -> storeModel($inputs);
                return redirect('account/login');
            }else{
                $data['msgErrors'] = $validator->errors()->all();
                // return view('auth.register', ); 
            }
    	}

       return view('auth.register', ['inputs'=>$inputs]);
    }
}
