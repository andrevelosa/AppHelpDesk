<?php

	session_start();

	//isso vai servir se por algum motivo for colocado "#" em algum dos campos de digitação ser substituido por "-" para nao dar erro, ja que # ta servido para separar os conteudos logo abaixo. 
	$titulo = str_replace('#', '-', $_POST['titulo']); 
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' .  $categoria . '#' .  $descricao . PHP_EOL;

	//abrindo o arquivo
	$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
	//escrevendo o texto
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);

	//echo $texto;

	header('location: abrir_chamado.php');


?>