<?php

class UsersController extends BaseController {

    public function getIndex()
    {
        if(Auth::check())
        {
            return View::make('users.dash');
        } else {
            return Redirect::to('users/login');
        }
    }

    public function getLogin()
    {
        return View::make('users.login');
    }

    public function postCheck()
    {
        if(Input::has('email') && Input::has('password') && Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
        {
            return Redirect::intended('users');
        } else {
            return Redirect::to('users/login');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('users/login');
    }

    public function getCreate()
    {
        if($_ENV['USE_AUTH']) 
        {
            if(Auth::check())
            {
                return View::make('users.create');
            } else {
                return Redirect::to('users/login');
            }
        } else {
            return View::make('users.create');
        }
    }

    public function postAdd()
    {
        if(Input::has('email') && Input::has('password'))
        {
            $user = new User;
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            return Redirect::to('users/login');
        } else {
            return Redirect::to('users/create');
        } 
    }

}
