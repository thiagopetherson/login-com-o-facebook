<?php
	//Esse arquivo callback.php é somente para receber os dados do facebook, salvar na sessão e voltar para o index.php

	require 'fb.php';
	
	//Esse código getRedirectLoginHelper é o retorno dos dados que foram pegos na API do facebook
	$helper = $fb->getRedirectLoginHelper();
	
	try
	{
		//Utilizamos essa formatação de String pois as vezes os dados retornados não são Strings
		$_SESSION['fb_access_token'] = (string) $helper->getAccessToken();
	}
	catch(FacebookzException\FacebookResponseException $e)
	{
		echo "ERRO: ". $e->getMessage();
		exit();
	}
	catch(FacebookzException\FacebookSDKException $e)
	{
		echo "ERRO: SDK". $e->getMessage();
		exit();
	}
	
	header("Location: index.php");
	
?>