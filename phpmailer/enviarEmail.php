<?php

    require_once('class.phpmailer.php');
    include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
    
    $mail             = new PHPMailer();

    $body             = file_get_contents('../phpmailer/email.html');
    $body             = eregi_replace("[\]",'',$body);
    $body             = str_replace("[USR_NOME]",$nome, $body);
    $body             = str_replace("[USR_EMAIL]", $email, $body);
    $body             = str_replace("[USR_COD]", $codigo, $body);

    $mail->IsSMTP(); // telling the class to use SMTP
    //$mail->Host       = "mail.yourdomain.com"; // SMTP server
    //$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                               // 1 = errors and messages
                                               // 2 = messages only
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "webencyk@gmail.com";  // GMAIL username
    $mail->Password   = "webencykteste";            // GMAIL password

    $mail->SetFrom('webencyk@gmail.com', 'Webencyk');
    $mail->AddReplyTo('webencyk@gmail.com', 'Webencyk');

    $mail->Subject    = "Confirmar Registro";

    $mail->AltBody    = "Para ver esta mensagem, por favor, use um email com visualizador de HTML"; // optional, comment out and test
    //$mail->CharSet = 'UTF-8';
    
    $mail->MsgHTML($body);

    $address = $email;
    $mail->AddAddress($address,$nome);

    //$mail->AddAttachment("images/phpmailer.gif");      // attachment
    //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      //echo "Message sent!";
        $sucesso = true;
    }
?>
