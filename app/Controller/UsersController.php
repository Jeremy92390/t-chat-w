<?php 

namespace Controller;

use W\Controller\Controller;

class UsersController extends Controller {

	public function register(){
		$this->show('users/register');
	}

}