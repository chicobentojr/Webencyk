<?php
    require_once '../config/conexao.class.php';
    require_once '../config/crud.class.php';

    $con = new conexao(); // instancia classe de conxao
    $con->connect(); // abre conexao com o banco
    //@$getId = $_GET['id'];  //pega id para ediçao caso exista
    //if(@$getId){ //se existir recupera os dados e tras os campos preenchidos
    //    $consulta = mysql_query("SELECT * FROM produto WHERE id = + $getId");
    //    $campo = mysql_fetch_array($consulta);
    // }
    if(isset ($_POST['registrar'])){  // caso nao seja passado o id via GET cadastra 
        $nome = $_POST['nome'];  //pega o elemento com o pelo NAME 
        $email = $_POST['email']; //pega o elemento com o pelo NAME 
        $senha = $_POST['senha']; //pega o elemento com o pelo NAME 
        $tipo = 1;
        $crud = new crud('usuario');// instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        $cadastrado = false;
        $consulta = mysql_query("SELECT EMAIL FROM USUARIO");
        while ($campo = mysql_fetch_array($consulta))
        {
            if ($campo['EMAIL'] == $email) {
                $cadastrado = true;
                break;
            }
        }
        if(!$cadastrado)
        {
            $crud->inserir("email,nome,senha,tipo_id", "'$email','$nome','$senha','$tipo'");
            echo "<script>alert('Usuário Cadastrado com Sucesso');</script>";
            print "<script>location='index.php';</script>";
        }
        else {
            echo "<script>alert('Esse email já foi cadastrado');</script>";
        }
        $crud = new crud('USUARIO');  // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        $crud->inserir("EMAIL,NOME,SENHA,TIPO_ID", "'$email','$nome','$senha','$tipo'"); // utiliza a funçao INSERIR da classe crud
        header("Location: index.php"); // redireciona para a listagem
    }

    if(isset ($_POST['editar'])){ // caso  seja passado o id via GET edita 
        $nome = $_POST['nome']; //pega o elemento com o pelo NAME
        $descricao = $_POST['descricao']; //pega o elemento com o pelo NAME
        $crud = new crud('produto'); // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        $crud->atualizar("nome='$nome',descricao='$descricao'", "id='$getId'"); // utiliza a funçao ATUALIZAR da classe crud
        header("Location: index.php"); // redireciona para a listagem
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
              <input ID="txtSenha2" type="password"  placeholder="Confirmação de Senha" TextMode="Password"/> 
            </div>
            <div class="ui divider"></div>

            <center>         
             <div class="ui buttons">
                 <input  ID="btnCancelar" type="button" value="Voltar" class="ui button cancel" onclick="redirecionar('/')" />
                <div class="or" data-text="ou"></div>
                <input ID="btnRegistrar" type="submit" name="registrar" onclick="btnRegistrar_Click" value="Enviar" class="ui teal button" />
             </div>   
            </center>
        </div>
     <div class="column"> </div>
 </div>
</section>
    </form>
    </body>
</html>
<?php
    $con->disconnect();
?>
