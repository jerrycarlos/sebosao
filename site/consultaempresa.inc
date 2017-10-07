<?php
//session_start();
// Conexão ao banco
$link = mysqli_connect("127.0.0.1", "root", "vertrigo", "sebosao");
	if ($link->connect_error) {
	    die("Connection failed: " . $link->connect_error);
	} 
	//echo "Connected successfully<br/>";

	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
if($link){
	$sql = "SELECT nome_empresa,nome_dono,cpf_dono,login FROM empresa";
	$consulta = mysqli_query($link,$sql);
	echo '<table>';
	echo '<tr>';
	echo '<td>Empresa</td>';	
	echo '<td>Nome do Dono</td>';
	echo '<td>CPF/CNPJ</td>';
	echo '<td>Login</td>';
	echo '</tr>';	
	// Armazena os dados da consulta em um array associativo
	while($registro = mysqli_fetch_assoc($consulta)){
		echo '<tr>';
		echo '<td>'.$registro["nome_empresa"].'</td>';
		echo '<td>'.$registro["nome_dono"].'</td>';
		echo '<td>'.$registro["cpf_dono"].'</td>';
		echo '<td>'.$registro["login"].'</td>';
		echo '</tr>';		
	}
	echo '</table>';
}

?>
