
<?php 
$nome  = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['msg'];

$msg = $msg + "Enviado de " + $nome + "<" + $email + ">";
$emailenviar = "leofronza@furb.br";
$destino = $emailenviar;

$enviaremail = mail($destino, $assunto, $msg);
$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
$mgm = "ERRO AO ENVIAR E-MAIL!";
echo "";
echo $mgm;
?>