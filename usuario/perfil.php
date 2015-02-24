<?php
    session_start();
    
    require_once '../config/conexao.class.php';
    require_once '../config/crud.class.php';
    
    $con = new conexao();
    $con->connect();
    
    if (isset($_POST['alterar'])) {
        
        $arquivo = $_FILES['imagem']['tmp_name']; 
        $tamanho = $_FILES['imagem']['size'];
        $tipo    = $_FILES['imagem']['type'];
        $nome  = $_FILES['imagem']['name'];
        $email = $_POST['email'];

        if ( $arquivo != "none" ){
            
            $fp = fopen($arquivo, "rb");
            $conteudo = fread($fp, $tamanho);
            $conteudo = addslashes($conteudo);
            fclose($fp); 

            $crud = new crud('USUARIO');
            $crud->atualizar("FOTO = '$conteudo'","EMAIL = '$email'");
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $caminhoCSS = "../css/";
            $caminhoIMG = "../imagens/";
            $caminhoJS = "../js/";
            include('../masterHead.php');
        ?>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
        <?php include('../menuSuperior.php'); ?>
        <div class="ui two column page grid ">
            
            <div class="column">
                <div class="ui fluid form segment">
                    <center>
                        <h3 class="ui header">Alterar Dados</h3>
                        <div class="ui divider"> </div>
                    </center>
                        <div id="Foto" class="field">
                            <label>Foto</label>
                            <br />
                            <input type="file" name="imagem"/>
                        </div>

                        <div id="Nome" class="field">
                            <label>Nome</label>
                            <input type="text" name="nome" placeholder="Nome"/>
                        </div>

                        <div id="Email" class="field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Email"/>
                        </div>

                        <div id="Senha" class="field">
                            <label> Senha </label>
                            <input type="password" name="senha" placeholder="Senha"/>
                        </div>

                        <div class="field">
                          <input type="password" name="senha2" placeholder="Confirme sua Senha"/>
                        </div>
                        
                        
                        <center>
                            <div class="ui divider"></div>
                            <input type="submit" class="ui button teal" value="Alterar" name="alterar" />
                        </center>
                </div>
            </div>
            <div class="column"> </div>
        </div>
        </form>
    </body>
</html>
