<?php
    ob_start();
?>
<section id="login">
<div class="ui three column page grid ">
    <div class="column"> </div>
    <div class="column">
<div class="ui fluid form segment">
     
      <center> <h3 style="color:gray" class="ui header">Registro</h3></center>
      
      <div class="ui divider"></div>
        <div class="field">
          <label>Digite seu e-mail</label>
          <input type="text" ID="txtEmail" placeholder="Email" />
        </div>
      
        <div class="field">
          <label>Digite seu nome </label>
          <input type="text" ID="txtNome" placeholder="Nome" />
        </div>
      
        <div class="field">
          <label>Digite sua senha </label>
          <input type="password" ID="txtSenha"  placeholder="Senha" TextMode="Password" />
        </div>

        <div class="field">
          <label>Confirme sua senha </label>
          <input ID="txtSenha2" type="password"  placeholder="Confirmação de Senha" TextMode="Password"/> 
        </div>
        
        <div class="ui divider"></div>
<center> 
                
         <div class="ui buttons">
             <input  ID="btnCancelar" type="button" value="Voltar" class="ui button cancel" onclick="redirecionar('../')" />
            <div class="or" data-text="ou"></div>
            <input ID="btnRegistrar" type="button"  onclick="btnRegistrar_Click" value="Enviar" class="ui teal button" />
        </div>   
</center>

     <div class="column"> </div>
 </div>
</section>

<?php
    $Conteudo = ob_get_contents();
    ob_end_clean();
    $tituloPagina = "Registre-se";
    include('masterHome.php');
?>