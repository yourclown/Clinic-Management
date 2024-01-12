<?php

namespace App\Http\Controllers;

use App\singlemodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.register');
    }
    public function registeruser(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $error = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required',
        ]);

        $parameter = array($name, $email, md5($password));
        $data      = singlemodel::call_procedure('proc_insert_User', $parameter);
        if ($data) {
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('failed', 'Registration Failed');
        }
    }
    public function loginuser(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
    
        $param = array($email, $password);
        $result = singlemodel::call_procedure('proc_authenticate_user', $param);
    
        if ($result[0]->result === 'success') {
            $userData = array(
                'userid'     => $result[0]->id,
                'email'      => $result[0]->email,
                'name'       => $result[0]->name,
            );
    
            $request->session()->put('user_data', $userData);
            return redirect('dash-board');
        } else {
            return view('auth.login', ['loginError' => 'Incorrect email or password. Please try again.']);
        }
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        return redirect('/login');
    }
    public function profile(Request $request)
    {
        if ($request->session()->has('user_data')) {
            $userData = $request->session()->get('user_data');
            // dd($userData );
        return view('auth.profile', compact('userData'));
    } else {
        return redirect('login');
    }
}
}