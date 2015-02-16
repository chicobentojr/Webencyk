<?php
if (!(isset($caminhoCSS))) {
$caminhoCSS = "css/";
}
if (!(isset($caminhoJS))) {
$caminhoJS = "js/";
}
if (!(isset($caminhoIMG))) {
$caminhoJS = "imagens/";
}
?>

<meta charset='utf-8'></meta>
<link rel='shortcut icon' href='<?= $caminhoIMG . 'Webencyk_Logo.jpg'?>' />

<link href='<?= $caminhoCSS . 'style.css' ?>' rel='stylesheet' />
<link href='<?= $caminhoCSS . 'semantic.css' ?>' rel='stylesheet' type='text/css' />

<script src='<?= $caminhoJS . 'jquery-1.11.1.js' ?>' type='text/javascript'></script>
<script src='<?= $caminhoJS . 'javascript.js' ?>' type='text/javascript'></script>
<script src='<?= $caminhoJS . 'semantic.js' ?>' type='text/javascript'></script>


