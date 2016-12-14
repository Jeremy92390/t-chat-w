<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller{

	/**
	 * Page d'accueil par défaut
	 */
	public function home(){
		$this->show('default/home');
	}

	public function test() {
		$monContenuDeTest = 'Je suis un contenu de test';

		$this->show('default/mon-test', array(
			'contenu'=>$monContenuDeTest
			));		
	}

}