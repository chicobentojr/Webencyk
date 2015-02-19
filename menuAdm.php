<?php
if (!(isset($caminhoIMG))) {
$caminhoJS = "imagens/";
}
if (isset($_GET['logout'])){
    session_destroy();
    header('Location:/');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<section id="adm">
    <div id="pagina" class="ui inverted menu" style="margin-top:0; margin-bottom:0;">
        <a href="/" class="item"><i class="home icon"></i>Home </a>
        <div class='item'>
            <div class='ui icon input'>
                <input ID='pesquisa' placeholder='Buscar no site...' />
                    <i id='buscar' class='search link icon'></i>
            </div>
        </div>
        <div class="right menu" style="height: 40px;">
            <a id="Mostrar" class="item"><i class="settings icon"></i>Configurações </a>
            <a href="?logout=true" type="submit" name="logout" id="btnLogin" class="item"><i class='off icon'></i>Logout</a>
            <!--<input value="logout" type="submit" name="logout" id="btnLogin" class="ui teal button"><i class='off icon'></i>Logout</a>-->
        </div>
    </div>
    <div id="MenuOculto" class="ui small vertical right inverted labeled icon sidebar menu">
        <a class="item" href="administrador.php">
            <i class="inverted circular teal settings icon"></i> <b>Configurações</b>
        </a>
        <div class="ui basic accordion">
            <div class="title">
                <div class="item">
                    <i class="pencil icon"></i><b>Cadastros</b>
                </div>
            </div>
            <div class="content">
                <div class="menu">
                    <a class="item" href="CadastrarLinguagem.aspx">Linguagem</a>
                    <a class="item" href="CadastrarTema.aspx">Tema</a> 
                    <a class="item" href="CadastrarConteudo.aspx">Conteúdo</a>
                    <a class="item" href="CadastrarVideos.aspx">Vídeo</a> 
                    <a class="item" href="CadastrarCodigo.aspx">Código</a>
                    <a class="item" href="CadastrarAtividades.aspx">Atividade</a>
                    <a class="item" href="CadastrarQuestoes.aspx">Questões</a>
                    <a class="item" href="CadastrarAdministrador.aspx">Administrador</a>
                </div>
            </div>
            <div class="title">
                <div class="item">
                    <i class="book icon"></i><b>Gerenciamento</b>
                </div>
            </div>
            <div class="content">
                <div class="menu">
                    <a class="item" href="GerenciarLinguagens.aspx">Linguagens </a>
                    <a class="item" href="GerenciarTemas.aspx">Temas </a>
                    <a class="item" href="GerenciarConteudos.aspx">Conteúdos</a>
                    <a class="item" href="GerenciarVideos.aspx">Videos </a>
                    <a class="item" href="GerenciarCodigos.aspx">Códigos </a>
                    <a class="item" href="GerenciarAtividades.aspx">Atividades </a>
                    <a class="item" href="GerenciarQuestoes.aspx">Questões </a>
                    <a class="item" href="GerenciarUsuarios.aspx">Usuários </a>
                    <a class="item" href="/gerenciar/mensagens.php">Mensagens </a>
                </div>
            </div>
            <div class="title">
                <div class="item">
                    <i class="sitemap icon"></i><b>Relacionamentos</b>
                </div>
            </div>
            <div class="content">
                <div class="menu">
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

    $("#buscar").click(function () {
        $('#buscarasp').click();
    });

    $("#Mostrar").click(function e() {
        if ($("#MenuOculto").hasClass("active")) {
            $("#MenuOculto").removeClass("active"),
    $("#MenuOculto").sidebar("pull page");
        }
        else {
            $("#MenuOculto").addClass("active"),
    $("#MenuOculto").sidebar("push page");
        }
        ;
    });

    $(".accordion").accordion()
    {
    };

</script>
</form>
</body>
</html>
