<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eleição 2016</title>
	<link rel="stylesheet" type="text/css" href="css/Style_menu.css">
	<link rel="stylesheet" type="text/css" href="css/Style_form.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/relogio.js"></script>
  <script type='text/javascript' src='http://code.jquery.com/jquery-1.5.1.min.js'></script>

</head>
<body style="background-color: rgba(153, 255, 102,0.4);">
<div class="container-fluid">
<div class="row"> 
   <div class="col-md-3">
	   <?php
	   require('menu.html');
	    ?>

 </div>
	
	
<div class="col-md-2" id="demo">

   <?php
   require('main.php');
    ?>
    
   
   
    </div>
    </div>
     </div>
    


</body>
</html>