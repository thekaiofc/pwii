<?php include('cabecalho.php');  ?>
<?php

$nome = $_POST['Txnome'];
$mensagem = $_POST['Txmensagem'];

echo "Nome: ". $nome . "</br>" . "Mensagem: ". $mensagem ;

?>

<?php include('rodape.php'); ?>