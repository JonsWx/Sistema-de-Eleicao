<!DOCTYPE html>
<html>
<head>
	<title>Eleições</title>
	<style type="text/css">
			#menu ul {
    padding:0px;
    margin:0px;
    background-color:#EDEDED;
    list-style:none;
}
	</style>
</head>
<body>
<?php
require('conexao.php');
   
 @$seleciona=mysql_query("SELECT * FROM eleitor");
            ?>
              <center> <fieldset><font size="12"> Eleitores: </font></fieldset>
              <p></p>
            <?php
     while ($array=mysql_fetch_array($seleciona)) {
     	echo $array['nome']. "<br>";
     }

 ?>
</body>
</html>
