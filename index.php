<?php
    ob_start();
?>
<section class='ui segment' style="background-color: transparent; box-shadow:none; ">
            <div class="ui three column grid aligned center">
                <div class="column" onclick="redirecionar('masterHome.php')">
                <!--<asp:LinkButton ID="LinkButton1" PostBackUrl="~/VisualizarLinguagem.aspx" style="text-decoration:none;" runat="server" >-->
                    <div class="ui segment inverted teal">
                        <i class="ui icon code huge inverted circular"></i>
                        <h1 class="ui header">Aprenda!</h1>
                        <h5 class="ui header">Na Webencyk você aprenderá de diversas formas a programar!</h5>
                    </div>
<!--                    </asp:LinkButton>-->
                </div>
                <div class="column">
<!--                <asp:LinkButton ID="LinkButton2" PostBackUrl="~/VisualizarConteudoDetalhes.aspx?linguagem=1&tema=1&conteudo=1" style="text-decoration:none;" runat="server" >-->
                    <div class="ui segment inverted teal">    
                        <i class="ui icon browser huge inverted circular"></i>
                        <h1 class="ui header">Comece agora!</h1>
                        <h5 class="ui header">Clique aqui e veja o primeiro conteúdo de muitos que você poderá ver.</h5>
                    </div>
<!--                </asp:LinkButton>-->
                </div>
                <div class="column">
<!--                    <asp:LinkButton ID="LinkButton3" PostBackUrl="~/RealizarAtividade.aspx?linguagem=1&tema=1" style="text-decoration:none;" runat="server" >-->
                    <div class="ui segment inverted teal">    
                        <i class="ui icon pencil huge inverted circular"></i>
                        <h1 class="ui header">Teste-se!</h1>
                        <h5 class="ui header">Realize Atividades de todas os temas das linguagens do Webencyk </h5>
                    </div>
<!--                </asp:LinkButton>-->
                </div>
            </div>
            <div class="ui three column grid aligned center">
                <div class="column">
<!--                    <asp:LinkButton ID="LinkButton5" PostBackUrl="~/EnviarMensagem.aspx" style="text-decoration:none;" runat="server" >-->
                    <div class="ui segment inverted teal">
                        <i class="ui icon mail outline huge inverted circular"></i>
                        <h1 class="ui header">Contate-nos!</h1>
                        <h5 class="ui header">Clique aqui para nos enviar uma mensagem com elogios, críticas e/ou sugestões. </h5>
                    </div>
<!--                    </asp:LinkButton>-->
                </div>
                <div class="column">
<!--                    <asp:LinkButton ID="LinkButton6" PostBackUrl="~/Sobre.aspx" style="text-decoration:none;" runat="server" >-->
                    <div class="ui segment inverted teal">
                        <i class="ui icon info letter huge inverted circular"></i>
                        <h1 class="ui header">Conheça-nos!</h1>
                        <h5 class="ui header">Clique aqui para saber um pouco mais sobre o projeto</h5>
                    </div>
<!--                </asp:LinkButton>-->
                </div>
            </div>
    </section>

<?php
    $Conteudo = ob_get_contents();
    ob_end_clean();
    $tituloPagina = "Webencyk - Seu Portal de Estudos!";
    include("./masterHome.php");
?>