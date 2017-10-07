<?php
	session_start();	
	$login = $_POST['cpf'];
	$senha = $_POST['senha'];	
	include "conectaBanco.inc";

	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
	$result = mysqli_query($link,"SELECT login FROM usuario WHERE cpf = $login AND senha= $senha");		
	if(mysqli_num_rows ($result) > 0 )
	{
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		while($registro = mysqli_fetch_assoc($result))
			$_SESSION['nome'] = $registro["login"];	
		$acesso = mysqli_query($link,"SELECT acesslevel from usuario where cpf = $login and acesslevel = 100");
		while($acess = mysqli_fetch_assoc($acesso)){			
			$_SESSION['acesso'] = $acess["acesslevel"];	
		}
		unset ($_SESSION['erro']);
		header('location:index.php');
	}else{
		$_SESSION['erro'] = "Login ou senha inválidos.";
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		header('location:login.php');
	}	
?>