<?php
include('conexao.php');
@$nome_eleitor = $_POST['nome_eleitor'];
@$numero_titulo = $_POST['numero'];
@$btn = $_POST['btn'];
@$seleciona=mysql_query("SELECT * FROM eleitor where num_titulo= '$numero_titulo'");
if($btn){
  if (mysql_num_rows($seleciona)>0) {
  
        echo "eleitor ja foi cadastrado com esse titulo!";
  }else{
 $cadastrar = mysql_query("INSERT INTO eleitor VALUES('','$nome_eleitor','$numero_titulo')");
        echo "<script>alert('Cadastro realizado com sucesso!')</script>";
}
     }


?>
