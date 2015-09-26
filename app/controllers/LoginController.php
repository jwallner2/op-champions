<?php

class LoginController extends BaseController {

	protected $layout = 'shared.master';

	public function showLoginPage()
	{
		$user = new User();
		$user->name = "Jean Wallner";

		$data = array('user' => $user);
		$this->layout->content = View::make('login/login')->with($data);
	}

}
