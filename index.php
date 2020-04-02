<?php
	require 'fb.php';
	
	//Esse fb_acscess_token é um token que o Facebook nos dá
	if(isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token']))
	{		
		//Aqui passamos 4 parâmetros. Email, nome, id e a Sessão (que é o token que foi recebido do facebook)
		$res = $fb->get('/me?fields=email,name,id',$_SESSION['fb_access_token']);
		
		//O json_decode transforma de JSON para um Array normal
		$r = json_decode($res->getBody());
		
		echo "Tá Logado!";
		
		echo "<br>";
		
		echo "Meu nome: ".$r->name; //Esse name é o nome que vem do facebook (podemos pegar o id, email, etc ...
		
		echo "<br>";
		
		echo "Meu Email: ".$r->email; 
		
		echo "<br>";
		
		echo "<a href='sair.php'>Sair</a>";
	}
	else
	{
		header("Location: login.php");
	}	

?>