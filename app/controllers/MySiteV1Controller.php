<?php

class MySiteV1Controller extends BaseController {

    public function getUsers()
    {
        $users = User::all();
        return Response::json($users);
    }

    public function getUser($id)
    {
        $user = User::find($id);
        return Response::json($user);
    }

    public function postAddUser()
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
