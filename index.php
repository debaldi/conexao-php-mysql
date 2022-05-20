<?php
/*
	Criado por: Emerson de Baldi
	Data: 20/05/2022 18:57:31
*/


include_once 'connection.php';

try {
	
	$pdo = conexaoDB();
	
	$pesquisa = $pdo->prepare('SELECT * FROM nometabela');	// Informe o nome da tabela em nometabela
	$pesquisa->execute();
	
	$dados = $pesquisa->fetchAll(PDO::FETCH_ASSOC);
		
		if($pesquisa->rowCount() >= 1):
			foreach($dados as $d):
				echo $d["nomecampo"] . "<br>";				// Informe o nome do campo da tabela em nomecampo
			endforeach;
		endif;
	
} catch(Exception $ex){
	echo 'erro -> ' . $ex->getMessage();
	
}

?>
