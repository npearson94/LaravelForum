<?php

class AuthController extends BaseController {

    protected $layout = "template";

	public function getLogin()
	{
        $this->layout->content = View::make('auth.login');
	}

    public function postLogin()
    {
        if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
        {
            return Redirect::intended('/');
        }

        return Redirect::route('login')->with('message', 'Invalid Email Address or Password.')->withInput();
    }

    public function getLogout()
    {
        Auth::logout();

        return Redirect::to('/');
    }

}
