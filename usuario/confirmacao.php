<?php
    require_once '../config/conexao.class.php';
    require_once '../config/crud.class.php';
    
    $con = new conexao();
    $con->connect(); 
    
    if(isset ($_GET['usr']) AND isset($_GET['cod'])){
        $email = $_GET['usr'];
        $codigo = $_GET['cod'];
        
        $consulta = mysql_query("SELECT * FROM USUARIO WHERE EMAIL = '$email'"); 
        //while ($campo = mysql_fetch_array($consulta))
        //{
        $campo = mysql_fetch_array($consulta);    
        if ($campo['CODIGO'] == $codigo) {
            
            $crud = new crud('USUARIO');
            $crud->atualizar('VERIFICADO = 1',"EMAIL = '$email'");
            $confirmado = true;
            }
        else {
            $msgErr = "Código Inválido!";
            }
        //}
    }
    else {
        $msgErr = "Não foi possível confirmar seu cadastro. Usuário não Encontrado";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        $caminhoCSS = "../css/";
        $caminhoJS = "../js/";
        $caminhoIMG = "../imagens/";
        include('../masterHead.php');
    ?>
</head>
<body>
    <form action="" method="post"><!--   formulario carrega a si mesmo com o action vazio  -->
    <?php include('../menuSuperior.php'); ?>
    <section id="login">
<div class="ui three column page grid ">
    <div class="column"> </div>
    <div class="column">
        <div class="ui fluid form segment">

          <center> <h3 style="color:gray" class="ui header">Confirmação</h3></center>

          <div class="ui divider"></div>

            <center>
            <?php if (isset($confirmado)) { ?>
                  <div class="ui green message">
                  <p><b>Seu Cadastro foi confirmado com Sucesso!</b></p>
                  </div> 
                  <div class="ui divider"></div>
                  <a href='/usuario/login.php' class="ui teal button">Entrar</a>
            <?php } else { ?>
                  <div class="ui red message">
                  <p><?= "<b>$msgErr</b>"; ?></p>
                  </div>
            <?php } ?>
            </center>
        </div>
     <div class="column"> </div>
 </div>
</section>
    </form>
    </body>
</html>
