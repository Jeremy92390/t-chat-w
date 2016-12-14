<?php $this->layout('layout', ['title' => "Connectez-vous à T'Chat"]); ?>

<?php $this->start('main_content'); ?>

<h2>Connectez-vous à T'Chat</h2>

<?php foreach($errors as $error) : ?>

	<?php echo '<p>'.$error.'</p>'; ?>

<?php endforeach; ?>

<form action="<?php echo $this->url('login') ?>" method="POST" enctype="multipart/form-data">
	<p>
		<label for="pseudo">
			Pseudo :
		</label>
		<input type="text" 
			   name="pseudo" 
			   id="pseudo" 
			   value=""/>
	</p>
	<p>
		<label for="mot_de_passe">
			Mot de passe :
		</label>
		<input type="password" name="mot_de_passe" id="mot_de_passe" />
	</p>
	<p>
		<input type="submit" class="button" value="Me connecter"/>
		<a class="button" href="<?php $this->url('register'); ?>" title="Accéder à la page d'inscription">
			Pas encore inscrit ?
		</a>
	</p>

</form>

<?php $this->stop('main_content'); ?>