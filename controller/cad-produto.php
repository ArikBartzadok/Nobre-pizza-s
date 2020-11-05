<?php
include_once ('connect.php');
include_once ('config.php');

$name = filter_input(INPUT_POST, "name");
$price = filter_input(INPUT_POST, "price");
$desc = filter_input(INPUT_POST, "desc");
$imagem = filter_input(INPUT_POST, "pic");

/* if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = chmod("../img/products/", 0755); //Diretório para uploads
 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

    $imagem = $new_name;
}
*/

/*
id	nome	preco	descricao	imagem
*/

	$sql = "INSERT INTO produto (nome, preco, descricao, imagem) VALUES ('$name', '$price', '$desc', '$imagem')";
	$res = mysqli_query($con, $sql);
	$array = mysqli_affected_rows($con);

	if($array != 0) {
     echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../cadastra-produto.php'>" 
     . "<script type='text/javascript'>alert('Produto cadastrado com sucesso');</script>";
	}
	else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../cadastra-produto.php'>" 
    . "<script type='text/javascript'>alert('Produto não cadastrado');</script>";
	}