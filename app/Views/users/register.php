<?php $this->layout('layout', ['title' => 'Inscription']); ?>

<?php $this->start('main_content'); ?>

<h2>Inscription d'un utilisateur</h2>

<form action="<?php $this->url('register'); ?>" method="POST" enctype="multipart/form-data">
	<!-- pseudo, email, password, sexe, avatar -->
	<p>
		<label for="pseudo">Pseudo :</label>
		<input type="text" name="pseudo" id="pseudo" 
			   placeholder="3 à 50 caractères"
			   value=""/>
	</p>
	<p>
		<label for="email">Email :</label>
		<input type="email" name="email" id="email" value=""/>
		
	</p>
	<p>
		<label for="mot_de_passe">Mot de passe :</label>
		<input type="password" name="mot_de_passe" id="mot_de_passe" value="" />
		
	</p>
	<p>
		<label for="sexe">Sexe :</label>
		<select name="sexe" name="sexe">
			<option value="femme">Femme</option>
			<option value="homme">Homme</option>
			<option value="non-défini">Non-défini</option>
		</select>
	</p>
	<p>
		<label for="avatar">Avatar :</label>
		<input type="file" name="avatar" id="avatar"/>
		
	</p>
	<p>
		<input type="submit" name="send" value="s'inscrire" />
	</p>
</form>

<?php $this->stop('main_content'); ?>