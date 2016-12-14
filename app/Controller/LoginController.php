<?php  

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;

class LoginController extends Controller {

	public function form() {

		// var_dump('hello Xdebug !');
		//Si un post a bien été envoyé, on effectue le traitement du formulaire 

		// je crée un tableau d'érreur
		$errors = array();

		// var_dump('Contenu de $_POST', $_POST);

		if ($_POST) {
			// on vérifie qu'un pseudo et un mot de passe on bien été envoyés
			if( empty($_POST['pseudo']) ) {
				$errors['pseudo'] = 'Vous devez renseigner un pseudo';
			}

			if( empty($_POST['mot_de_passe']) ) {
				$errors['mot_de_passe'] = 'Vous devez renseigner un mot de passe';
			}


			// var_dump('Contenu de mes erreurs après vérification empty()', $errors);
			// Je fais appel au modele d'authentification de facon a profiter de la methode isValidLoginInfo qui à été codé par les concepteurs du Framework
			$auth = new AuthentificationModel ();


			// On fait appel a isValidLoginInfo qui va vérifier que la combinaison pseudo/mot de passe entré par l'utilisateur correspond bien à un utilisateur en base de données
			$pseudo = ! empty($_POST['pseudo']) ? $_POST['pseudo'] : '';
			$motDePasse = ! empty($_POST['mot_de_passe']) ? $_POST['mot_de_passe'] : '';

			// var_dump('Pseudo ; ', $pseudo);
			// var_dump('Mot de passe :', $motDePasse);
			

			$userId = $auth->isValidLoginInfo($_POST['pseudo'], $_POST['mot_de_passe']);

			// var_dump('user id : ', $userId);

			if($userId === 0) {
				$errors['pseudo/mot_de_passe'] = 'Les informations de connexion entrées sont incorrectes';

			}
			// var_dump('Contenu de mes erreurs après validation totale :', $errors);
			// je vérifie que le tableau d'erreur est non vide, ce qui signifie que le formulaire a été correctement rempli
			if (empty($errors)) {
				$usersModel = new UsersModel();
				$userInfos = $usersModel->find($userId);
				var_dump('Informations de l\'utilisateur', $userInfos);
				$auth -> logUserIn($userInfos);

				$this->redirectToRoute('default_home');
			}
		}
		$this->show('login/form', array('errors' => $errors));
	}
}