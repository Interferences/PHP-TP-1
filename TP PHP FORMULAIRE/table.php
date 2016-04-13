<?php

$table=$_POST['table'];

if(isset($_POST[$table])){
  $table=$_POST[$table];
} else {
 $table="";
}

for($i=1;$i<=10;$i++){
    $res=$i*$table;
    echo $i."x".$table."=".$res; 
  }

?>