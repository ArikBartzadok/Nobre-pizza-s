<?php
include_once('connect.php');

$id = $_GET['id'];

$sql = "DELETE FROM comentario WHERE id_comentario = '$id'";
$res = mysqli_query($con, $sql);

if (mysqli_affected_rows($con) != 0){
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=../feedbacks.php'>"
    . "<script type='text/javascript'>"
    . "alert('Feedback excluido com sucesso!');</script>";
}
else {
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=../feedbacks.php'>"
    . "<script type='text/javascript'>"
    . "alert('Erro ao excluir o feedback.');</script>";
}

?>