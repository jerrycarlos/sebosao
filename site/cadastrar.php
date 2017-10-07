<?php
	include "conectaBanco.inc";

	$nomeempresa = $_POST['nomeempresa'];
	$nomedono = $_POST['nomedono'];
	$login = $_POST['loginCadastro'];
	$senha = $_POST['senhaCadastro'];
	$cpf = $_POST['cpf'];
	$sql_insert = "INSERT INTO empresa (nome_empresa,nome_dono,cpf_dono,login,senha) VALUES  ('$nomeempresa', '$nomedono', '$cpf', '$login', '$senha')";
	$erro = "";	
	$sql_result = "SELECT `login` FROM `empresa` WHERE `login` = '$login'";
	$result = mysqli_query($link,$sql_result);	
	if(mysqli_num_rows($result)){
		$erro += 'Login já em uso.\n';
	}	
	$sql_result = "SELECT `cpf` FROM `empresa` WHERE `cpf` = '$cpf'";
	$result = mysqli_query($link,$sql_result);	
	if(mysqli_num_rows($result)){
		$erro += 'CPF já em uso.\n';
	}
	$sql_result = "SELECT `nome_empresa` FROM `empresa` WHERE `nome_empresa` = '$nomeempresa'";
	$result = mysqli_query($link,$sql_result);	
	if(mysqli_num_rows($result)){
		$erro += 'Nome da empresa já em uso.\n';
	}
	if($erro == ""){
		if(mysqli_query($link,$sql_insert)) {	             
				echo "Registro efetuado com sucesso<br />";
		} else {
		    echo "Error: " . $sql_insert . "<br>" . $link->error;
			mysqli_close($link);
		}

	}
	else{
		echo "$erro";
	}	
?>