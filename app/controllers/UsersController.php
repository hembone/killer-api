<?php

class UsersController extends BaseController {

    public function getIndex()
    {
        App::abort(404);
    }

    public function getCreate()
    {
    	return View::make('createUser');
    }

    public function postAdd()
    {
    	$data['post'] = $_POST;
    	return View::make('addUser', $data);
    }

}
