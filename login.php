<?php
    session_start();
    require_once 'config/crud.class.php';
    require_once 'config/conexao.class.php';
    
    $con = new conexao();
    $con->connect();
    
    if (isset($_POST['entrar'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if (empty($email) || empty($senha)) {
            $msgErr = "Email & Senha são obrigatórios";
        }
        else{
        $consulta = mysql_query("SELECT * FROM USUARIO WHERE EMAIL = '$email'");
        if (mysql_num_rows($consulta) <= 0) { $msgErr = "Email não Cadastrado.";}
        else{
            while ($campo = mysql_fetch_array($consulta)) {
                if ($campo['SENHA'] == $senha) {
                    $_SESSION['usr_id'] = $campo['USUARIO_ID'];
                    $_SESSION['usr_nome'] = $campo['NOME'];
                    $_SESSION['usr_tipo'] = $campo['TIPO_ID'];
                    if ($_SESSION['usr_tipo'] == 1) {
                        header('Location:index.php');
                    }
                    else header('Location:administrador.php');
                }
                else { $msgErr = "Senha Incorreta.";}
            }
        }
        }
    }
?>
<html>
<head>
    <?php
        include('masterHead.php');
    ?>
</head>
<body>
    <form action="" method="post">
        <?php include('menuSuperior.php'); ?>
<section id="login">
    <div class="ui three column page grid ">
        <div class="column"> </div>
        <div class="column">
            <div class="ui fluid form segment">
            <center> <h3 style="color:gray" class="ui header">Login</h3></center>
            <div class="ui divider"></div>
        <div class="field">
          <label>Email</label>
          <input ID="txtEmail" type="text" placeholder="Email" name="email" />
        </div>
        
        <div class="field">
          <label>Digite sua senha </label>
          <input ID="txtSenha" type="password" placeholder="Senha" name="senha"/>
        </div>
        <div class="ui divider"></div>
        <center>     
             <div class="ui buttons">
                 <input  ID="btnCancelar" type="button" value="Voltar" class="ui button cancel" onclick="redirecionar('/')"/>
                <div class="or" data-text="ou"></div>
                <input ID="btnLogin" value="Entrar" name="entrar" type="submit"  class="ui teal button" />
            </div>   
        
        <?php if (isset($msgErr)) { ?>
        <div class="ui red message">
            <p><?= "<b>$msgErr</b>"; ?></p>
        </div>
        <?php } ?>
        </center>
     <div class="column"> </div>
                </div>
            </div>
        </div>
</section>
</form>
</body>
</html>
