﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>





<?php 
require "conexao.php";

@session_start();



$code = $_SESSION['code'];
$senha = $_SESSION['senha'];
$nome = $_SESSION['nome'];
$painel = $_SESSION['painel'];

if($code == ''){
	echo "<script language='javascript'>window.location='../index.php';</script>";	}
	
	else if($nome == ''){
	echo "<script language='javascript'>window.location='../index.php';</script>";
	
} else if($senha == ''){
	echo "<script language='javascript'>window.location='../index.php';</script>";
}
/*
else ($painel_atual != $painel){
		echo "<script language='javascript'>window.location='../index.php';</script>";
	} */

?>


<?php 
if(@$_GET['acao'] == 'quebra'){
	session_destroy(); 
	
	$_SESSION['code'];
	$_SESSION['nome'];
	$_SESSION['senha'];
	$_SESSION['painel'];
	
	echo "<script language='javascript'>window.location='index.php';</script>";
}
	
	?>

</body>
</html>