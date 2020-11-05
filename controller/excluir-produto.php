<?php
include_once('connect.php');
include_once ('config.php');

$id = $_GET['id'];

$sql = "DELETE FROM produto WHERE id = '$id'";
$res = mysqli_query($con, $sql);

if (mysqli_affected_rows($con) != 0){
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=../lista-produtos.php'>"
    . "<script type='text/javascript'>"
    . "alert('Produto excluido com sucesso!');</script>";
}
else {
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=../lista-produtos.php'>"
    . "<script type='text/javascript'>"
    . "alert('Erro ao excluir o produto.');</script>";
}

?>