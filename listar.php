<html>
<head>
	<title>listar</title>
	<style>
		#campo{
                position: relative;
                width: 700px;
                height: 600px;
                left: 50%;
                margin-left: -350px;
                padding-top: 30px;
                background: white;
                color: white;
                background-color: rgba(0,0,0,0.6);
                font-family:border-color: black;
                border-radius: 10px;
                border: 3px green solid;
		}
		table{
				border-radius: 5px;
                border: 3px green solid;
                color: white;
		}
		#c{
			border-color: black;
			border: none;
			background: black;
		}
		#bt{
			width: 100px;
			margin-left: 43%;
		}
		a{
			text-decoration: none;
			color: yellow;
		}
		#list{
			color: black;
		}
	</style>
</head>
<body background="11.png" height="500px" width="700px">

	<?php include_once('conexao.php');?>

<div id="campo">
	<h1 align="center">Lista de Alunos</h1>
		
		
		<button align="center" id="bt"><a href="index.php" id="list" align="center">Voltar</a></button>

	<table align="center" border="1px" id="">

		<tr align="center" id="c">
			<td>N°</td>
			<td>Nome</td>
			<td>Sexo</td>
			<td>Excluir</td>
			<td>Alterar</td>
		</tr>
	
	<?php

		include_once('conexao.php');
 	


		@$excluir = $_GET['excluir'];

		$r = mysqli_query($con, "DELETE FROM aluno where numero = $excluir");
		if($r){
			echo "<script>location.href='listar.php';</script>";
		}



		$sql = "SELECT * FROM aluno";
		
		$r = mysqli_query($con, $sql);

		if ($r) {
			while($dados = mysqli_fetch_array($r)) { ?>
				<tr align="center">
					<td width="50px"><?php echo $dados['numero']; ?></td>
					<td width="300px"><?php echo $dados['nome']; ?></td>
					<td width="50px"><?php echo $dados['sexo']; ?></td>
					<td width="60px"><a href="?excluir=<?php  echo $dados['numero']; ?>" onclick="return confirm('Deseja Realmente Excluir?');">DEL</a></td>
					<td width="60px"><a href="editar.php?id=<?php echo $dados['numero'];?>">EDIT</a></td>
				</tr>

				<?php 
			}
		}
		
	?>
	</table>

	</div>

</body>
</html>