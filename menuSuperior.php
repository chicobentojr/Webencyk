<?php
if (!(isset($caminhoIMG))) {
$caminhoIMG = "imagens/";
}
if (isset($_GET['logout'])){
    session_destroy();
    header('Location:index.php');
}
?>
<section id='adm' style='top: 0px;'>
    <div id='pagina' class='ui inverted menu' style='margin-top:0; margin-bottom:0;'>
        <?php if(isset($_SESSION['usr_id'])){ ?> 
            <a id='btnMenu' class='item' ><i class='list layout icon'></i>Menu</a>
        <?php } ?>
        <a href='/' class='item'><i class='home icon'></i>Home</a>
        <div class='item'>
            <div class='ui icon input'>
                <input ID='pesquisa' placeholder='Buscar no site...' />
                    <i id='buscar' class='search link icon'></i>
            </div>
        </div>
    <div class='right menu' style='height: 40px;'>
        <?php if(isset($_SESSION['usr_id'])){ ?> 
        <a href="index.php?logout=true" type="submit" name="logout" id="btnLogin" class="ui teal button"><i class='off icon'></i>Logout</a>
        <?php } else { ?> 
        <a id='divRegistro' href='/registro/' class='item'><i class='sign in icon'></i> Registrar-se</a>
        <a href='/login.php' id='btnLogin' class='item'><i class='user icon'></i>Login</a>
        <?php } ?>
        </div>
    </div>

    <div id='divMenuEsquerdo' class='ui small inverted vertical left labeled icon sidebar menu' >
        <div class='item'>
            <center>
                <p class='ui label teal'><?php if (isset($_SESSION['usr_nome']) == false) echo "Usuário Não Logado"; else echo $_SESSION['usr_nome']; ?></p>
            <br />
                <img src='<?= $caminhoIMG.'basic1-117_user_group_couple-512.png'?>' class='rounded ui medium image' width='250' align='middle'
            </center>
        </div>
        <a href='PerfilProgresso.aspx' class='item'><i class='user icon'></i>Progresso</a>
        <a href='PerfilUsuario.aspx' class='item'><i class='edit icon'></i>Alterar seus Dados</a>
        <a href='VisualizarLinguagem.aspx' class='item'><i class='book icon'></i>Conteúdo</a>
        <a href='enviarMensagem.php' class='item'><i class='mail icon'></i>Contate-nos </a>
        <?php if($_SESSION['usr_tipo'] == 2) { ?>
        <a id='divAdm' href='/administrador.php' class='item' visible='false'><i class='settings icon'></i>Configurações</a>
        <?php } ?>
    </div>

</section>

<script>
        $('#buscar').click(function () {
            $('#buscarasp').click(); 
        });

        $('document').ready(function () { });

        $('#btnMenu').click(function e() {
            if ($('#divMenuEsquerdo').hasClass('active')) {
                $('#divMenuEsquerdo').removeClass('active'),
        $('#divMenuEsquerdo').sidebar('pull page');
            }
            else {
                $('#divMenuEsquerdo').addClass('active'),
        $('#divMenuEsquerdo').sidebar('push page');
            }
            ;
        });
</script>
