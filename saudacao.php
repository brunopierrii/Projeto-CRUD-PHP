<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <title> Cadastro</title>
    <style>
          body{
            font-family: Arial, Helvetica, sans-serif;
            background: Linear-gradien(to right, rgb(20,147,220), rgb(17,54,71));
          }
    </style>  
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuários</a>
        </li>
        <li class="nav-item">
          <?php
                print " <a href ='logout.php' class='btn btn-danger'>Sair</a>";
          ?>      
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class = "container">
      <div class = "row">
          <div class = "col mt-5">
              <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                      case "novo":
                        include("novo-usuario.php");
                      break;
                      case "listar":
                        include("listar-usuario.php");
                      break;
                      case "salvar":
                        include("salvar-usuario.php");
                      break;
                      case "editar":
                        include("editar-usuario.php"); 
                      break;                       
                    }  
              ?>      
          </div>
      </div> 
    </div>   




    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>