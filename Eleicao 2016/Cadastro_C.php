<?php
include('conexao.php');
@$btn = $_POST['btn'];
@$nome=$_POST['nome'];
@$partido=$_POST['partido'];
@$numero=$_POST['numero'];
$num_votos = 0;

@$seleciona=mysql_query("SELECT * FROM candidato where numero= '$numero'");
if($btn){
  if (mysql_num_rows($seleciona)>0) {
  
        echo "candidato ja foi cadastrado com esse numero";
  }else{
 $cadastrar=mysql_query("INSERT INTO candidato VALUES('','$nome','$numero','$partido','$num_votos')");
        echo "<script>alert('Cadastro realizado com sucesso!')</script>";
}
     }



?>

