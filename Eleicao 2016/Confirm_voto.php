<div class="container">
  <h2>Confirme seu voto!</h2>
  
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Continuar</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Candidato</h4>
        </div>
        <div class="modal-body">
          <?php
         echo "<b>Nome: </b>".$candidato['nome']; 
         echo "<br><b>Partido:</b>".$candidato['partido'];

         ?><br>
         <label>Número do candidato</label><input type="text" value="<?php
         echo $num_c?>" name="numero_c" readonly>
     
        </div>
        <div class="modal-footer">
        		<label>Título do eleitor</label><input type="text" value="<?php
         echo $num?>" name="titulo" readonly>
        		<input type="submit" class="btn btn-primary" name="Confirmar" value="Confirmar">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        		          
        </div>
      </div>
      
    </div>
  </div>
  
</div>
