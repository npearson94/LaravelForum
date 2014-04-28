<?php

class UserController extends BaseController {

    protected $layout = "frontend.template";

    public function index()
    {
        $this->layout->content = View::make('frontend.user.index');
    }

	public function getLogin()
	{
        $this->layout->content = View::make('frontend.user.login');
	}

    public function postLogin()
    {
        if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
        {
            return Redirect::intended('/');
        }

        return Redirect::route('user.login')->with('errMessage', 'Invalid Email Address or Password.')->withInput();
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/')->with('message', 'Your were successfully logged out!');
    }

}
