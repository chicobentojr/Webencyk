<?php
    require_once '../config/conexao.class.php';
    require_once '../config/crud.class.php';
    require_once '../phpmailer/gerarCodigo.php';

    $con = new conexao();
    $con->connect(); 
    
    if(isset ($_POST['registrar'])){  // caso nao seja passado o id via GET cadastra 
        
        $nome = $_POST['nome'];  //pega o elemento com o pelo NAME 
        $email = $_POST['email']; //pega o elemento com o pelo NAME
        $senha = $_POST['senha']; //pega o elemento com o pelo NAME 
        $senha_confirmacao = $_POST['senha_confirmacao']; //pega o elemento com o pelo NAME 
        $tipo = 1;
        $crud = new crud('USUARIO');// instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        $cadastrado = false;
        
        if (empty($email) || empty($senha) || empty($nome) || empty($senha_confirmacao)) {
            $msgErr = "Todos os dados devem ser preenchidos";
        }
        else if ($senha != $senha_confirmacao) {
            $msgErr = "As senhas devem ser iguais";
        }
        else {
            
            $consulta = mysql_query("SELECT EMAIL FROM USUARIO");
            while ($campo = mysql_fetch_array($consulta))
            {
                if ($campo['EMAIL'] == $email) {
                    $cadastrado = true;
                    $msgErr = "Email já Cadastrado";
                    break;
                }
            }
            
            if(!$cadastrado)
            {
                $codigo = gerar_cod_random();
                $crud->inserir("EMAIL,NOME,SENHA,TIPO_ID,CODIGO,VERIFICADO", "'$email','$nome','$senha','$tipo','$codigo',0");

                include('../phpmailer/enviarEmail.php');
                
                //print "<script>location='/';</script>";
            }
            else {
                $msgErr = 'Esse email já foi cadastrado';
                //echo "<script>alert('Esse email já foi cadastrado');</script>";
            }
        }
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
    <?php include('../menuSuperior.php');?>
    <section id="login">
<div class="ui three column page grid ">
    <div class="column"> </div>
    <div class="column">
        <div class="ui fluid form segment">

          <center> <h3 style="color:gray" class="ui header">Registro</h3></center>

          <div class="ui divider"></div>
            <div class="field">
              <label>Digite seu e-mail</label>
              <input name="email" type="text" ID="txtEmail" placeholder="Email" />
            </div>

            <div class="field">
              <label>Digite seu nome </label>
              <input name="nome" type="text" ID="txtNome" placeholder="Nome" />
            </div>

            <div class="field">
              <label>Digite sua senha </label>
              <input name="senha" type="password" ID="txtSenha"  placeholder="Senha" TextMode="Password" />
            </div>

            <div class="field">
              <label>Confirme sua senha </label>
              <input name="senha_confirmacao" type="password"  placeholder="Confirmação de Senha" TextMode="Password"/> 
            </div>
            <div class="ui divider"></div>

            <center>
            <input ID="btnRegistrar" type="submit" name="registrar" onclick="btnRegistrar_Click" value="Registrar" class="ui teal button" />
            <?php if (isset($msgErr)) { ?>
                  <div class="ui red message">
                  <p><?= "<b>$msgErr</b>"; ?></p>
                  </div>
            <?php } ?>
            <?php if (isset($sucesso)) { ?>
                  <div class="ui green message">
                  <p><b>Usuario Cadastrado com Sucesso!<br>Aguardando confirmação de Cadastro no seu email</b></p>
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