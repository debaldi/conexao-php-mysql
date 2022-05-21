<?php
/*
	Criado por: Emerson de Baldi
	Data: 20/05/2022 18:57:31
*/

define('HOST', 'localhost');						// nome host de conexão
define('USER', 'root');								// nome usuário banco de dados
define('PASS', '');									// padrão é vazio
define('DB', 'listar');								// nome do banco de dados que você criou no phpMyAdmin  


function conexaoDB(){
	
	try{
		$dsn = "mysql:host=" . HOST . "; dbname=" . DB ;
		echo "Banco de Dados Conectado...<br>";			// se o db conectar vai apresentar esta msg na tela
		
		$con = new PDO($dsn, USER, PASS);
		echo "Banco de Dados Selecionado...<br>";		// se o db selecionar vai apresentar esta msg na tela
		
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		return $con;
	
	} catch (PDOException $ex){
		echo "erro -> " . $ex->getMessage();			// se contiver algum erro no nome dos HOST, USER, PASS ou DB vai apresentar uma msg
		
	}
}
?>