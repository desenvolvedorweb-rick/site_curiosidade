<?php
// iniciando a sessão
session_start();


$login =  "pcanal";
$senha = "123";

if($login == "pcanal" and $senha == "123"){
	$_SESSION['logado'] = true;
	echo "usuario logado com sucasso!";
}else{
	echo "usuario nao logado";
}



?>