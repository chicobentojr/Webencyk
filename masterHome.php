    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            <?php echo $tituloPagina; ?>
        </title>
        <link rel="shortcut icon" href="imagens/basic1-117_user_group_couple-512.png" />

        <link href="css/style.css" rel="stylesheet" />
        <link href="css/semantic.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
        <script src="js/JScript1.js" type="text/javascript"></script>
        <script src="js/semantic.js" type="text/javascript"></script>

    </head>
    <body style="margin-top:0; margin-bottom:0;">
    <form>
    <section id="adm" style="top: 0px;">
        <!-- MENU SUPERIOR -->
        <div id="pagina" class="ui inverted menu" style="margin-top:0; margin-bottom:0;">
            <a id="btnMenu" class="item" ><i class="list layout icon"></i>Menu</a>
            <a href="../Webencyk/" class="item"><i class="home icon"></i>Home</a>
            <div class="item">
                <div class="ui icon input">
                    <input ID="pesquisa" placeholder="Buscar no site..." />
                        <i id="buscar" class="search link icon"></i>
                </div>
            </div>
        <div class="right menu" style="height: 40px;">
            <a id="divRegistro" href="registro.php" class="item"><i class="sign in icon"></i> Registrar-se</a>
            <!--<a id="divUsuario" class="item"><asp:label ID="lblUsuario" CssClass="ui label huge teal" text="" /></a>-->
            <a href="login.php" id="btnLogin" class="item"><i class="user icon"></i>Login</a>
                <!--<asp:linkbutton style="text-decoration:none;" CausesValidation="false"  ID="btnLogout" OnClick="btnLogout_Click" CssClass="item">
                    <div class=""><i class="off icon"></i>Logout</div>
                    </asp:linkbutton>-->

            </div>
        </div>

        <!-- MENU LATERAL ESQUERDO -->
        <div id="divMenuEsquerdo" class="ui small inverted vertical left labeled icon sidebar menu" >
            <div class="item">
                <center><!-- <asp:Label ID="lblUsuarioEmail" CssClass="ui label teal"  Text="Usuário não logado!"></asp:Label>-->
                    <p class="ui label teal">Usuário não Logado</p>
                </center>
                <br />
                <center><!--<asp:Image id="imgFoto" CssClass="rounded ui medium image"  Width="250"  ImageAlign="Middle" />-->
                    <img src="imagens/basic1-117_user_group_couple-512.png" class="rounded ui medium image" width="250" align="middle"
                </center>
            </div>
            <a href="PerfilProgresso.aspx" class="item"><i class="user icon"></i>Progresso</a>
            <a href="PerfilUsuario.aspx" class="item"><i class="edit icon"></i>Alterar seus Dados</a>
            <a href="VisualizarLinguagem.aspx" class="item"><i class="book icon"></i>Conteúdo</a>
            <a href="EnviarMensagem.aspx" class="item"><i class="mail icon"></i>Contate-nos </a>
            <a id="divAdm" href="PaginaAdm.aspx" class="item" visible="false"><i class="settings icon"></i>Configurações</a>
        </div>

        </section>
    <script>
            $("#buscar").click(function () {
                $('#buscarasp').click(); 
            });

            $('document').ready(function () { });

            $("#btnMenu").click(function e() {
                if ($("#divMenuEsquerdo").hasClass("active")) {
                    $("#divMenuEsquerdo").removeClass("active"),
            $("#divMenuEsquerdo").sidebar("pull page");
                }
                else {
                    $("#divMenuEsquerdo").addClass("active"),
            $("#divMenuEsquerdo").sidebar("push page");
                }
                ;
            });

    </script>


        <div class="">
            <?php
                echo $Conteudo;
            ?>
        </div>
        </form>
    </body>
    </html>