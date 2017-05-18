<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Eleições 2016</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
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
    #menu ul {
    padding:0px;
    margin:0px;
    background-color:#EDEDED;
    list-style:none;
}
#menu ul li { display: inline; }


#menu ul li a {
    padding: 40px 30px;
    display: inline-block;

    /* visual do link */
    background-color:#EDEDED;
    color: #333;
    text-decoration: black;
    border-bottom:3px solid  red;
}

#menu ul li a:hover {
    background-color:#999999;
    color: #6D6D6D;
    border-bottom:3px solid red;
}
  </style>
</head>
<body>
<?php
   require('conexao.php');
 ?>

<link rel="stylesheet" type="text/css" href="css/Style_form.css">
<div class="container"><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class="btn btn-success" align="center" style="width: 700px; height: 75px;" >
<font size="11px">Cadastro Candidato</font></h1><br><br><br>
                <div class="rows">
                <div class="col-md-3">
                    <form  method="post" action="Cadastro_C.php">
                    <ul>
                            <p align="center"><input type="text" name="nome" id="name" required="required" class="form" placeholder="Name" /></p>
                            <p align="center"><input type="text" name="partido" id="name" required="required" class="form" placeholder="Partido" /></p>
                            <p align="center"><input type="text" name="numero" id="name" required="required"  class="form" placeholder="Número" data-toggle="tooltip" data-placement="top" title="Somente números!" maxlength="14" id="test" /></p>
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
</form>
</body>
</html>
