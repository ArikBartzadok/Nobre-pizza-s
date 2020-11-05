<?
//stars, comment
/*
id_comentario	/id_cliente	/nome_cliente	/nota	/texto
*/
include_once ('connect.php');
include_once ('session.php');
include_once ('config.php');

$id_cliente = $_SESSION['id'];
$nome_cliente = $_SESSION['name'];
$nota = filter_input(INPUT_POST, "stars");
$texto = filter_input(INPUT_POST, "comment");

$sql = "INSERT INTO comentario (id_cliente, nome_cliente, nota, texto) VALUES ('$id_cliente', '$nome_cliente', '$nota', '$texto')";
$res = mysqli_query($con, $sql);
$array = mysqli_affected_rows($con);

	if($array != 0) {
     echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../feedback.php'>" 
     . "<script type='text/javascript'>alert('Feedback cadastrado com sucesso');</script>";
	}
	else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../feedback.php'>" 
    . "<script type='text/javascript'>alert('Feedback não cadastrado');</script>";
	}