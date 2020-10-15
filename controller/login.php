<?php
include ('connect.php');
session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
session_start();

$email = filter_input(INPUT_POST, "email");
$pass = md5(filter_input(INPUT_POST, "pass"));

$sql = "SELECT * FROM user WHERE email = '$email' AND senha = '$pass'";
$res = mysqli_query($con, $sql);
$array = mysqli_num_rows($res);

if($array != 0) {

	$array = mysqli_fetch_assoc($res);

	do{
		$name = $array['nome'];
		$rank = $array['ranking'];
		$id = $array['id'];
	} while($array = mysqli_fetch_assoc($res));

	$_SESSION['id'] = $id;
	$_SESSION['email'] = $email;
   	$_SESSION['pass'] = $pass;
   	$_SESSION['name'] = $name;
   	$_SESSION['rank'] = $rank;

    if ($rank == 1){
      echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin.php'><script type='text/javascript'>alert('Adm | Logado com sucesso!');</script>";
    }
    else{
      echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../user.php'><script type='text/javascript'>alert('Logado com sucesso!');</script>";
    }
}
else {
	unset($_SESSION['email']);
   	unset($_SESSION['pass']);
   	unset($_SESSION['name']);
   	unset($_SESSION['rank']);
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../login.php'><script type='text/javascript'>alert('Usuário ou senha incorretos');</script>";
}
?>