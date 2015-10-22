<?php 

class UsersController extends BaseController {

    public function __construct(){
        // Only Guest can access this
        $this->beforeFilter('guest', array('only' => array('login', 'handleLogin', 'signUp', 'handleSignUp')));
    }
    
    public function signUp(){
        return View::make('users.signup');
    }

    public function handleSignUp(){
        $username = Input::get('username');
        $password = Input::get('password');

        $user = new User;
        $user->username = $username;
        $user->password = Hash::make($password);
        $user->save();

        return Redirect::to('/');
    }

    public function login(){
        return View::make('users.login');
    }

    public function handleLogin(){
        $data = Input::only(['username', 'password']);
        
        $credential = array(
            'username'=> $data['username'],
            'password'=> $data['password']
        );

        if(Auth::attempt($credential)){
            Redirect::to('/');
        }

        Session::flash('message', 'ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด');
        Session::flash('status', 'fail');
        return Redirect::route('login')->withInput();
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }

        return Redirect::route('login');
    }
}

?>