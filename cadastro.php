<?php
		include_once ('index.html');

		require_once ('conexao.php');

		$numero = $_POST['numero'];
		$nome = $_POST['nome'];
		$sexo = $_POST['sexo'];

		$sql = "INSERT INTO aluno (numero, nome, sexo) VALUES ('$numero', '$nome', '$sexo')";

		$r = mysql_query($con, $sql);

		if ($r) {
			echo "Cadastrado com Sucesso";
		}else{
			echo "Erro ao Cadastrar";
		}
	?>