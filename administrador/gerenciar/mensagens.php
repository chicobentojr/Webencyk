<?php
    session_start();
    require_once '../../config/conexao.class.php';
    require_once '../../config/crud.class.php';
    $con = new conexao(); // instancia classe de conxao
    $con->connect(); // abre conexao com o banco
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        $caminhoCSS = "../../css/";
        $caminhoJS = "../../js/";
        $caminhoIMG = "../../imagens/";
        include('../../masterHead.php');
    ?>
</head>
<body>
<form method="post">
    <?php include('../../menuAdm.php'); ?>
        <div class="ui segment " style="background-color:transparent; box-shadow:none">
        <div class="ui one page column grid"> 
        <div class="column">
            <h3>Mensagens</h3>
            <div class="ui segment" style="overflow-x:auto; overflow-y:auto; background-color:transparent; box-shadow:none;">
            <?php 
                $consulta = mysql_query("SELECT *,U.NOME FROM MENSAGEM M INNER JOIN USUARIO U ON U.USUARIO_ID = M.USUARIO_ID ORDER BY DATA_HORA DESC");
                while($campo = mysql_fetch_array($consulta)){
            ?>
                <div class="ui segment inverted black" style="padding: 0;">
                    <div class="ui basic accordion">
                        <div class="title">
                            <div class="ui label black"><?= $campo['NOME'].' - '.$campo['DATA_HORA'].' - '.$campo['ASSUNTO'];  ?></div>
<!--                            <div class="ui top right label teal"><?php if(date($campo['DATA_HORA']) >= "20".date('y').'-'.date('m').'-'.date('d')) echo "Novo 20".date('y').'-'.date('m').'-'.date('d') ; ?></div>-->
                        </div>
                        <div class="content">
                            <div class="ui inverted segment teal" style="font-style:italic; width: 100%; color:White; font-size: medium;"><?= "'".$campo['TEXTO']."'"; ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
                    </div>
            </div>
    </div>
</div>
</form>
    <script>
        //$('document').ready(function () { $('#Mostrar').click(); });
        $(".accordion").accordion()
        {
        };
    </script>
</body>
</html>
