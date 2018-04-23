
<?php 
$nome  = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['msg']. " \nEnviado por: ". $nome . ' <'. $email . '>';

$msg = $msg + "Enviado de " + $nome + "<" + $email + ">";
$emailenviar = "leofronza@furb.br";
$destino = $emailenviar;

$enviaremail = mail($destino, $assunto, $msg);

echo " <meta http-equiv='refresh' content='1;URL=../pages/contato.html'>";
echo "<script>alert('Email enviado com Sucesso!);</script>";

?>