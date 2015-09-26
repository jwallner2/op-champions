<?php

class HomeController extends BaseController {

	protected $layout = 'shared.master';

	public function showHomePage()
	{
		$this->layout->content = View::make('home/home');
	}

}
