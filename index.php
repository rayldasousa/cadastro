<html>
    <head>
        <title>Cadastro</title>
        <style>

              body{
                margin-top: 150px;
              }
              #caixa{
                position: relative;
                width: 300px;
                height: 300px;
                left: 50%;
                margin-left: -150px;
                padding-top: 35PX;
                background: white;
                color: white;
                background-color: rgba(0,0,0,0.6);
                font-family:border-color: black;
                border-radius: 10px;
                border: 3px green solid;
              }  

              #list{
                text-decoration: none;
              }

              table tr{
                height: 40px;
                color: white;
              }

              a{
                color: black;
              }

        </style>
    </head>
    <body background="11.png" height="500px" width="700px">
      <div align="center" id="caixa">
        <table>
        <form  align="center" action="index.php" method="POST">
              <h2 align="center">CADASTRO</h2>
              <tr>
                 <td colspan="2">
                    <input type="text" name="numero" placeholder="Digite seu Numero" required>
                 </td>  
              </tr>
               <tr>
                  <td colspan="2">
              <input id="nome" type="text" name="nome" placeholder="Digite seu Nome" required>
                  </td>
              </tr>
              <tr>
                  <td align="center">         
                    Sexo:
                  </td>
                  <td align="left">
                    <input type="radio" value="M" name="sexo" required>M
                    <input type="radio" value="F" name="sexo">F
                  </td>
              <tr align="center">
                <td><input type="submit" name="enviar" value="Cadastrar" onclick="msg()"></td>
                <td><button><a href="listar.php" id="list">Listar</a></button></td>
              </tr>
              </table>
      </div>
        </form>
        <?php
          include_once "conexao.php";
          if(isset($_POST['enviar'])){
              $numero = $_POST['numero'];
              $nome = $_POST['nome'];
              $sexo = $_POST['sexo'];
              mysqli_query($con,"INSERT INTO aluno (numero, nome, sexo)VALUES('$numero', '$nome', '$sexo')");
              mysqli_close($con);
          }
        ?>
        <script>
            function msg(){
              alert('Cadastrado com Sucesso');
            }
        </script>
    </body>
</html>