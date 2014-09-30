<?php

class UsersController extends BaseController {

    public function getIndex()
    {
        return View::make('users.login');
    }

    public function getCreate()
    {
    	return View::make('users.create');
    }

    public function postAdd()
    {
    	$input = Input::all();

        $user = new User;
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->save();

    	return Redirect::to('users');
    }

}
