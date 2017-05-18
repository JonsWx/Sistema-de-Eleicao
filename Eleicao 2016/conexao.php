<?php
$conecta = mysql_connect("localhost","root","") or print(mysql_error());
$banco = "eleicao"; 
mysql_select_db($banco) or print(mysql_error());

?>
