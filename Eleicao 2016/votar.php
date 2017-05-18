<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Eleições 2016</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<style>
  /* Tooltip */
  #test + .tooltip > .tooltip-inner {
      background-color: #73AD21; 
      color: #FFFFFF; 
      border: 1px solid green; 
      padding: 15px;
      font-size: 20px;
  }
  #test + .tooltip.top > .tooltip-arrow {
      border-top: 5px solid green;
  }
  </style>
  <link rel="stylesheet" type="text/css" href="css/Style_form.css">
</head>
<body>
</body>
</html>
<div class="container"><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class="btn btn-success" align="center" style="width: 700px; height: 75px;" >
<font size="11px">Votar</font></h1><br><br><br>
                <div class="rows">
                <div class="col-md-3">
                    <form  method="post" action="Votar.php">
                    <ul>
                            
                            <p align="center"><input type="text" name="num" id="name" required="required"  class="form" placeholder="Número titulo" data-toggle="tooltip" data-placement="top" title="Somente números!" maxlength="14" id="test" /></p>
                            <p align="center"><input type="text" name="num_c" id="name" required="required"  class="form" placeholder="Número titulo" data-toggle="tooltip" data-placement="top" title="Somente números!" maxlength="14" id="test" /></p>
                        </div>
                        <div class="relative fullwidth col-xs-12">
                        
                            <input type="submit" id="submit" name="btn" class="form-btn semibold"
                            >
                        </div>
                        <div class="clear">
                    </form>
</div>
                    
                    
                </div>
            </div>


            <?php
            @$num = $_POST['num'];
            require('conexao.php');
            
            $seleciona=mysql_query("SELECT * FROM situacao"); 
            $seleciona2=mysql_query("SELECT * FROM candidato"); 
            $select = mysql_query("SELECT * FROM eleitor");
            @$numero = $_POST['num'];
            @$num_c = $_POST['num_c'];
            @$btn = $_POST['btn'];
     if($btn){
     	$msg = "";
     	while($situacao = mysql_fetch_array($seleciona)){
     			if($situacao['num_titulo']==$numero){
     			echo "<br>Você ja votou!";
     		}
     	}
     	while($candidato = mysql_fetch_array($seleciona2)){
     		if($candidato['numero']==$num_c){
     			while ($eleitor = mysql_fetch_array($select)) {
     				if($eleitor['num_titulo']==$numero){
     					include("Confirm_voto.php");
     				}else{
     					$msg = "<br>Número do titulo inexistente!";
     				}
     				}
     		}else if($candidato['numero']!=$num_c){
     			$msg = "<br>candidato inexistente!";
     			}
     		}
     			echo $msg;
     		}
 ?>
  <?php

            @$titulo = $_POST['titulo'];
            @$numero_c = $_POST['numero_c'];
            @$botao = $_POST['Confirmar'];
            if($botao=="Confirmar"){
             while($eleitor = mysql_fetch_array($select)){
            
          if($titulo == $eleitor['num_titulo']){
            $titulo_send= $eleitor['num_titulo'];
            $inserir_eleitor = mysql_query("INSERT INTO situacao VALUES('','$titulo_send')");
          }
            while($array2 = mysql_fetch_array($seleciona2)){

      @$votou = $array2['num_votos']+1;
      
      $voto = mysql_query("UPDATE candidato SET num_votos = '$votou' WHERE numero = '$numero_c'");
      echo "<br>Voto realizado com sucesso!"; 
          }
    
     
      } }
      ?>


  </form>
  


