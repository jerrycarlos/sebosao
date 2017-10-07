<?php
	session_start();
	include "conectaBanco.inc";	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];	
	if($_POST['proprietario'])
		$acesso = 100;
	else $acesso = 0;
	$sql_insert = "INSERT INTO usuario (nome,cpf,email,login,senha,acesslevel) VALUES  ('$nome', '$cpf', '$email', '$login', '$senha', '$acesso')";	
	$erro = "<p>";
	$result = mysqli_query($link,"SELECT cpf FROM 'usuario' WHERE 'cpf' = '$cpf'");	
	if(!$result)
		$erro .= "CPF já utilizado.<br/>";	
	$result = mysqli_query($link,"SELECT email FROM 'usuario' WHERE 'email' = '$email'");	
	if(!$result)
		$erro .= "E-mail já utilizado.<br/>";	
	$result = mysqli_query($link,"SELECT login FROM 'usuario' WHERE 'login' = '$login'");	
	if(!$result)
		$erro .= "Login já utilizado.<br/>";	
	$erro .= "</p>";
	if(mysqli_query($link,$sql_insert)) {	
		//$_SESSION['cadastroOK'] = $login;             		
		header('location:login.html');
	} else {
	    $_SESSION['erro'] = $erro;
	    mysqli_close($link);		
		header('location:cadastroUsuario.php');
	}
?>