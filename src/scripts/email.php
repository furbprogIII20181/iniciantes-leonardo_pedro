<?php
//Variáveis


// emails para quem será enviado o formulário
$emailenviar = "leofronza@furb.br";
$destino = $emailenviar;
$assunto = "Contato pelo Site";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: $nome <$email>';
//$headers .= "Bcc: $EmailPadrao\r\n";

ini_set();

$enviaremail = mail($destino, $assunto, "OI" , $headers);
$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
$mgm = "ERRO AO ENVIAR E-MAIL!";
echo "";
echo $mgm;
?>