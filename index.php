<?php
/*
	Criado por: Emerson de Baldi
	Data: 20/05/2022 18:57:31
*/


include_once 'connection.php';

try {
	
	$pdo = conexaoDB();
	
	$pesquisa = $pdo->prepare('SELECT * FROM carros');	// Seleciona todos os dados da tabela carros
	$pesquisa->execute();
	
	$dados = $pesquisa->fetchAll(PDO::FETCH_ASSOC);
		
		if($pesquisa->rowCount() >= 1):
			foreach($dados as $d):
				echo $d["id"] . " - ";					// id do carro cadastrado na tabela
				echo $d["nome"] . "<br>";				// nome do carro cadastrado na tabela
			endforeach;
		endif;
	
} catch(Exception $ex){
	echo 'erro -> ' . $ex->getMessage();
	
}

?>
