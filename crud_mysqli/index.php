<?php
include('conexao_mysqli.php');
?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro </title>
  </head>
  <body>
        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link active" href="index.php">Home</a>
            <a class="nav-item nav-link" href="?page=novo">Novo </a>
            <a class="nav-item nav-link" href="?page=listar">Listar </a>
            <!-- <a class="nav-item nav-link disabled" href="#">Desativado</a> -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col mt-5">
                <?php
                    
                    switch( @$_REQUEST["page"]){
                        case "novo":
                            include("novo.php");
                        break;
                        case "listar":
                            include("listar.php");
                        break;
                        case "salvar":
                            include("salvar.php");
                        break;
                        case "editar" :
                            include("editar.php");
                        default:
                            print "Bem vindo!";
                        break;
                    }
                    ?>

                </div>
            </div>
        </div>

       
  
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
     <script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
