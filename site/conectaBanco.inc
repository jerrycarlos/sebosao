<?php
	$servidor = "localhost";
	$user = "root";
	$password = "vertrigo";
	$database = "sebosao1";
	$link = mysqli_connect($servidor, $user, $password, $database); //$link guarda endereço da conexao, caso seja bem sucedida
	if ($link->connect_error) { // verifica se deu erro
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    die("Connection failed: " . $link->connect_error);
	} 	
?>	