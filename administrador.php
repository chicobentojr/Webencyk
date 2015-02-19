<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            include("masterHead.php");
        ?>
    </head>
    <body>
        <form method="post">
            <?php include('menuAdm.php'); ?>
            <div class="ui three column grid aligned center">
                <div class="column">
                <div class="ui basic accordion">
                    <div class="title">
                        <div class="ui segment inverted teal">
                            <i class="ui icon pencil huge inverted circular"></i>
                            <h1 class="ui header">Cadastre</h1>
                        </div>
                    </div>
                    <div class="content ui inverted menu small black vertical" style="width: 100%;">
                        <a class="item" href="CadastrarLinguagem.aspx">Linguagem</a>
                        <a class="item" href="CadastrarTema.aspx">Tema</a> 
                        <a class="item" href="CadastrarConteudo.aspx">Conteúdo</a>
                        <a class="item" href="CadastrarVideos.aspx">Vídeo</a> 
                        <a class="item" href="CadastrarCodigo.aspx">Código </a>
                        <a class="item" href="CadastrarAtividades.aspx">Atividade</a>
                        <a class="item" href="CadastrarQuestoes.aspx">Questões</a>
                        <a class="item" href="CadastrarAdministrador.aspx">Administrador</a>
                    </div>
                </div>
                </div>
                <div class="column">
                <div class="ui basic accordion">
                    <div class="title">
                        <div class="ui segment inverted teal">
                            <i class="ui icon book huge inverted circular"></i>
                            <h1 class="ui header">Gerencie</h1>
                        </div>
                    </div>
                    <div class="content ui inverted menu small black vertical" style="width: 100%;">
                        <a class="item" href="GerenciarLinguagens.aspx">Linguagens </a>
                        <a class="item" href="GerenciarTemas.aspx">Temas </a>
                        <a class="item" href="GerenciarConteudos.aspx">Conteúdos</a>
                        <a class="item" href="GerenciarVideos.aspx">Videos </a>
                        <a class="item" href="GerenciarCodigos.aspx">Códigos </a>
                        <a class="item" href="GerenciarAtividades.aspx">Atividades </a>
                        <a class="item" href="GerenciarQuestoes.aspx">Questões </a>
                        <a class="item" href="GerenciarUsuarios.aspx">Usuários </a>
                        <a class="item" href="/Webencyk/Gerenciar/Mensagens.php">Mensagens </a>
                    </div>
                </div>
                </div>
                <div class="column">
                    <div class="ui basic accordion">
                    <div class="title">
                        <div class="ui segment inverted teal">
                            <i class="ui icon pencil huge inverted circular"></i>
                            <h1 class="ui header">Relacione</h1>
                        </div>
                    </div>
                    <div class="content ui inverted menu small black vertical" style="width: 100%;">
                        <a class="item" href="RelacionarLinguagemTema.aspx">Linguagem - Tema</a>
                        <a class="item" href="RelacionarVideoConteudo.aspx">Vídeo - Conteúdo</a> 
                        <a class="item" href="RelacionarImagemConteudo.aspx">Imagem - Conteúdo</a>
                    </div>
                </div>
                </div>
            </div>
    </section>
        <script>
            $('document').ready(function () { $('#Mostrar').click(); });
            $(".accordion").accordion()
            {
            };
        </script>
        </form>
    </body>
</html>
