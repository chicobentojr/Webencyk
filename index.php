<?php 
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
        $caminhoCSS ="css/";
        $caminhoJS ="js/";
        $caminhoIMG = "imagens/";
        include ("./masterHead.php");
    ?>

</head>
<body style="margin-top:0; margin-bottom:0;">
    <form method="post" action="">
    <?php
        include('menuSuperior.php');
    ?>

    <section class='ui segment' style="background-color: transparent; box-shadow:none; margin-top:0; ">
        <div class="ui three column grid aligned center">
            <div class="column" onclick="redirecionar('masterHome.php')">
                <div class="ui segment inverted teal">
                    <i class="ui icon code huge inverted circular"></i>
                    <h1 class="ui header">Aprenda!</h1>
                    <h5 class="ui header">Na Webencyk você aprenderá de diversas formas a programar!</h5>
                </div>
            </div>
            <div class="column">
                <div class="ui segment inverted teal">    
                    <i class="ui icon browser huge inverted circular"></i>
                    <h1 class="ui header">Comece agora!</h1>
                    <h5 class="ui header">Clique aqui e veja o primeiro conteúdo de muitos que você poderá ver.</h5>
                </div>
            </div>
            <div class="column">
                <div class="ui segment inverted teal">    
                    <i class="ui icon pencil huge inverted circular"></i>
                    <h1 class="ui header">Teste-se!</h1>
                    <h5 class="ui header">Realize Atividades de todas os temas das linguagens do Webencyk </h5>
                </div>
            </div>
        </div>
        <div class="ui three column grid aligned center">
            <div class="column">
                <div class="ui segment inverted teal">
                    <i class="ui icon mail outline huge inverted circular"></i>
                    <h1 class="ui header">Contate-nos!</h1>
                    <h5 class="ui header">Clique aqui para nos enviar uma mensagem com elogios, críticas e/ou sugestões. </h5>
                </div>
            </div>
            <div class="column">
                <div class="ui segment inverted teal">
                    <i class="ui icon info letter huge inverted circular"></i>
                    <h1 class="ui header">Conheça-nos!</h1>
                    <h5 class="ui header">Clique aqui para saber um pouco mais sobre o projeto</h5>
                </div>
            </div>
        </div>
</section>
</form>
</body>
</html>