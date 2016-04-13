<!DOCTYPE html>
  <html>
    <head>
      <title>Formulaire</title>
    </head>
    <body>
      
      <?php
      
        extract($_GET);
        if(isset($operande1) && ($operande2)){
        
            if($op=="mult"){
            $res=$operande1*$operande2;
            } else if($op=="add"){
            $res=$operande1+$operande2;
            } else if($op=="sub"){
            $res=$operande1-$operande2;
            } else if($op=="div"){
              if($operande2==0){
                $operande2=1;
                  $res=$operande1/$operande2;
                }
             }
        }
      ?>
      
    <form method="get" action="exoForm3.php">
     
      <input type="text" name="operande1" value="<?php
                                  if(isset($res)) echo $res; 
             ?>" />
      <select name="op">
        <option value="mult">x</option>
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="div">/</option>
      </select>
      <input type="text" name="operande2"/><br>
      <input type="submit" name="accepter" value="Envoyer">
            
    </form>
      <?php
      if(isset($res)){
      echo $res."<br>";
      }
      ?>
    </body>
  </html>