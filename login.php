<?php
	
	require 'fb.php';
	
	//Esse código ajuda a gerar uma URL de login
	$helper = $fb->getRedirectLoginHelper();

	//Definindo algums permissões 
	$permissoes = array('email');
	
	//Pegando a url do facebook (o primeiro parâmetro é qual a url o facebook mandará após o usuário definir as permissões)
	// O segundo Parâmetro são as permissões
	$loginurl = $helper->getLoginUrl('http://localhost/CURSO-B7WEB/Modulo-21-WebServices/Aula-5-Facebook-Login/callback.php', $permissoes);
?>


<a href="<?php echo htmlspecialchars($loginurl); ?>">Fazer login com Facebook</a>