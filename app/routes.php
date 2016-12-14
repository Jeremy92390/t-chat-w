<?php
	
	$w_routes = array(
		// http://www.monsite.fr/users/see/1
		// http://localhost/t-chat/public/
		// [----------------URL--------------]
		// [Prtc][nom-de-domaine][----URI----]
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/test', 'Default#test', 'test'],
		['GET|POST', '/login', 'Login#form', 'login'],
		['GET|POST', '/register', 'Users#register', 'register']
	);