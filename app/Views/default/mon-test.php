<?php $this->layout('layout',['title' => 'Ma page de test']); ?>

<?php $this->start('main_content'); ?>
Hello test ! 
Je suis un fichier de vue.
<br>
<a href="<?php echo $this->url('default_home'); ?>" title="Retour à l'accueil">Revenir à l'accueil</a>
<br>
<?php echo $contenu ?>
<?php $this->stop('main_content'); ?>