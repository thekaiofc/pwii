<?php include('cabecalho.php');  ?>

<form action="exibirContato.php" method="post">
    <input type="text" placeholder="Nome" name="Txnome">
    <input type="text" placeholder="Mensagem" name="Txmensagem">
    <input type="submit" placeholder="Enviar" name="enviar">
</form>

<?php include('rodape.php'); ?>