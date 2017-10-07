<?php
	session_start();
	include "conectaBanco.inc";	
	$nome = $_POST['nome'];
	$fone = $_POST['telefone'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$numero = $_POST['numero'];	
	$complemento = $_POST['complemento'];
	$descricao = $_POST['descricao'];
	$login = $_SESSION['nome'];
	$result = mysqli_query($link,"SELECT login FROM 'usuario' WHERE 'login' = '$login'");		
	while($registro = mysqli_fetch_assoc($result)){
			$fk_proprietario = $registro["login"];
	}				
	$sql_insert = "INSERT INTO empresa (nome,telefone,rua,bairro,numero,complemento,descricao,fk_proprietario) VALUES  ('$nome', '$fone', '$rua', '$bairro', '$numero', '$complemento', '$descricao', '$fk_proprietario')";	
	$erro = "$fk_proprietario <br/>";
	$result = mysqli_query($link,"SELECT nome FROM 'empresa' WHERE 'nome' = '$nome'");	
	if($result){
		$erro .= "<p>";
		$erro .= "Nome de empresa já utilizado.<br/>";
		$erro .= "</p>";				
	}
	if(mysqli_query($link,$sql_insert)) {	
		//$_SESSION['cadastroOK'] = $login;             		
		header('location:index.php');
	} else {		
	    $_SESSION['erro'] = $erro . $link->error;	    
	    mysqli_close($link);		
		header('location:cadastroEmpresa.php');
	}
?>