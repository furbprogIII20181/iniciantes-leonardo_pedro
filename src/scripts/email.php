
<?php 
$nome  = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['msg']. " \n\nEnviado por: ". $nome . ' <'. $email . '>';

if ($nome != null or $email != null){

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:'. $nome .'<'.$email.'>';

//$msg = $msg + "Enviado de " + $nome + "<" + $email + ">";
$emailenviar = "leofronza@furb.br";
$destino = $emailenviar;

$enviaremail = mail($destino, $assunto, $msg);

echo " <meta http-equiv='refresh' content='1;URL=../pages/contato.html'>";

}
?>