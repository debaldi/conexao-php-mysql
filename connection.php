<?php
/*
	Criado por: Emerson de Baldi
	Data: 20/05/2022 18:57:31
*/

define('HOST', 'nome host de conexexao');			// padrão é localhost
define('USER', 'nome usuario banco de dados');		// padrão é root
define('PASS', 'senha banco de dados');				// padrão é vazio
define('DB', 'nome do banco de dados');				// nome do banco de dados que você criou no phpMyAdmin  


function conexaoDB(){
	
	try{
		$dsn = "mysql:host=" . HOST . "; dbname=" . DB ;
		echo "Banco de Dados Conectado...";			// se o db conectar vai apresentar esta msg na tela
		
		$con = new PDO($dsn, USER, PASS);
		echo "Banco de Dados Selecionado...";		// se o db selecionar vai apresentar esta msg na tela
		
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		return $con;
	
	} catch (PDOException $ex){
		echo "erro -> " . $ex->getMessage();
		
	}
}
?>