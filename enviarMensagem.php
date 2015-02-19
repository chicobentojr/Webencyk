<?php
    session_start();
    $usr_id = $_SESSION['usr_id'];
    require_once 'config/crud.class.php';
    require_once 'config/conexao.class.php';
    
    $con = new conexao();
    $con->connect();
    
    if (isset($_POST['enviar'])) {
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        if (empty($assunto) || empty($mensagem)) {
            $msgErr = "O Assunto e a Mensagem são Obrigatórios!";
        }
        else{
            $msg = new crud('MENSAGEM');
            $msg->inserir('USUARIO_ID,DATA_HORA,ASSUNTO,TEXTO',"$usr_id,now(),'$assunto','$mensagem'");
            $sucesso = true;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('masterHead.php'); ?>
    </head>
    <body>
        <form method="post">
        <?php include('menuSuperior.php'); ?>
        <section id="login">
        <div class="ui three column page grid ">
            <div class="column"> </div>
            <div class="column">
                <div class="ui fluid form segment">
                    <center> <h3 style="color:gray" class="ui header">Enviar Mensagem</h3></center>
                        <div class="ui divider"></div>
                        
                        <div class="field">
                          <label>Assunto</label>
                          <input type="text" name="assunto" placeholder="Assunto">
                        </div>

                        <div class="field">
                          <label>Mensagem</label>
                          <textarea cols="60" rows="5" name="mensagem" placeholder="Mensagem" ></textarea>
                        </div>
                        
                        <div class="ui divider"></div>
                        <center> 
                         <div class="ui buttons">
                            <input  ID="btnCancelar" type="button" value="Voltar" class="ui button cancel" onclick="redirecionar('/')"/>
                            <div class="or" data-text="ou"></div>
                            <input ID="btnLogin" value="Enviar" name="enviar" type="submit"  class="ui teal button" />
                        </div>
                            <?php if (isset($msgErr)) { ?>
                            <div class="ui red message">
                                <p><?= "<b>$msgErr</b>"; ?></p>
                            </div>
                            <?php } ?>
                            <?php if (isset($sucesso)) { ?>
                            <div class="ui green message">
                                <p><b>Mensagem Enviada com Sucesso!</b></p>
                            </div>
                            <?php } ?>
                        </center>
     <div class="column"> </div>
 </div>
</section>
    </form>
    </body>
</html>
