<?php
include_once ('connect.php');

$name = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$pass = md5(filter_input(INPUT_POST, "pass"));

// 0 -> usuário normal

$ranking = 0;

$sql = "SELECT * FROM user WHERE email = '$email'";
$res = mysqli_query($con, $sql);
$array = mysqli_num_rows($res);

if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = chmod("../img/users/", 0755); //Diretório para uploads
 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

    $imagem = $new_name;
}

//id	nome	email	senha	ranking	imagem

if($array == 0) {
	$sql = "INSERT INTO user (nome, email, senha, ranking) VALUES ('$name', '$email', '$pass', '$ranking')";
	$res = mysqli_query($con, $sql);
	$array = mysqli_affected_rows($con);

	if($array != 0) {
     echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../login.php'>" 
     . "<script type='text/javascript'>alert('Usuário cadastrado com sucesso');</script>";
	}
	else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../signup.php'>" 
    . "<script type='text/javascript'>alert('Usuário não cadastrado');</script>";
	}
}
else {
  echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../signup.php'>" 
  . "<script type='text/javascript'>alert('Email já existente');</script>";
}
?>