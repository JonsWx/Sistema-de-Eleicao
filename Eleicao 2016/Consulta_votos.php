<!DOCTYPE html>
<html>
<head>
	<title>Consulta Votos</title>
	<style type="text/css">
		.grafico{
			position: relative;
			width: 400px;	
			border: 1px solid #1E90FF;
			padding: 2px;
		}
		.grafico .barra{
			display: block;
			position: relative;
			background: #1E90FF;
			text-align: left;
			color: #333;
			height: 2em;
		}
		.grafico .barra span{
			position: absolute;
			left: 1em;
		}

	</style>

    <script type="text/javascript">function relogio() {
    var data = new Date();
    var horas = data.getHours();
    var minutos = data.getMinutes();
    var segundos = data.getSeconds();

    if ( horas < 10 ) {
        horas = "0" +horas;
    }

    if ( minutos < 10 ) {
        minutos = "0" +minutos
    }

    if ( segundos < 10 ) {
        segundos = "0" + segundos
    }

    document.getElementById("relogio").innerHTML = horas+":"+minutos+":"+segundos;  
}

window.setInterval("relogio()", 1000);
</script>


</head>

<body>
<?php
require('conexao.php');
   
 @$seleciona=mysql_query("SELECT * FROM candidato");
            ?>  <center> <fieldset><font size="12"> Votos dos candidatos: </font></fieldset><p></p>

            <?php
     
    @$votos=mysql_query("SELECT SUM(num_votos) FROM candidato");
    	
    
    while($votos2=mysql_fetch_array($votos)){



  $soma = array_sum($votos2);
  

  $total = $soma/2;
     
}

while ($array=mysql_fetch_array($seleciona)){	
 
 $porc = ($array['num_votos']*100)/$total;
 ?>

<div class="grafico" ><strong style="width:<?php echo $porc."%";?>;" class="barra">
	<?php echo $porc."%".$array['nome'];?>
</strong></div>



<?php
}  
?>


<h1 id="relogio"></h1>
</body>
</html>
