<?php
include ('connect.php');
session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
session_start();

$name = filter_input(INPUT_POST, "name");
$email = filter_input(INPUT_POST, "email");
$pass = md5(filter_input(INPUT_POST, "pass"));
$tel = filter_input(INPUT_POST, "tel");
$city = filter_input(INPUT_POST, "city");
$cep = filter_input(INPUT_POST, "cep");
$street = filter_input(INPUT_POST, "street");
$imagem = filter_input(INPUT_POST, "pic");

$id = filter_input(INPUT_POST, "id_user");

$rank = 0;

/* id
nome
email
senha
- > ranking
imagem
telefone
cidade
cep
rua */

$sql = "UPDATE user SET nome='$name', email='$email', senha='$pass',ranking='$rank', imagem='$imagem', telefone='$tel', cidade='$city', cep='$cep', rua='$street' WHERE id=$id";
$res = mysqli_query($con, $sql);
$array = mysqli_affected_rows($con);

if($array != 0) {

    if ($rank == 1){
      echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin-perfil.php'><script type='text/javascript'>alert('Dados atualizados com sucesso!');</script>";
    }
    else{
      echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../user.php'><script type='text/javascript'>alert('Dados atualizados com sucesso!');</script>";
    }
}
else {
  if ($rank == 1){
    echo "<script type='text/javascript'>alert('Falha ao atualizar dados.');</script>";
  }
  else{
    echo "<script type='text/javascript'>alert('Falha ao atualizar dados.');</script>";
  }
}
?>