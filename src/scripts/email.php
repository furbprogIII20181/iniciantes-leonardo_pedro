
<?php 
$nome  = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['msg'];

$emailenviar = "leofronza@furb.br";
$destino = $emailenviar;
//$assunto = "Contato pelo Site: ";
//$msg = <?php echo $_GET["message"]; 


$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '+ $email;


$enviaremail = mail($destino, $assunto, $msg , $headers);
$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
$mgm = "ERRO AO ENVIAR E-MAIL!";
echo "";
echo $mgm;
?>