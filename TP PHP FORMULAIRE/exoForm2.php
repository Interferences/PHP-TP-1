<!DOCTYPE html>
  <html>
    <head>
      <title>Formulaire</title>
    </head>
    <body>
  
      <?php
      
if(isset($_GET["table"])){
 $table=$_GET["table"];
} else{
  $table=12;
}
echo "<h2>"."table de"." ".$table." "."<br>"."</h2>";
for($i=1;$i<=10;$i++){
    $res=$i*$table;
    echo $i."x".$table."=".$res."<br>"; 
  }

?>
      
    <form method="get" action="exoForm2.php">
      <fieldset>
        
        <legend> <b></b> </legend>
        <label for="el1"></label> 
          <input id="el1" type="text" name="table" /><br>
           
      </fieldset> <input type="submit" name="accepter" value="Envoyer">
    </form>
      
    </body>
  </html>