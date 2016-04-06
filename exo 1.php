<!DOCTYPE html>
<html>
<head>
<title>hello world en php !</title>
</head>
<body>

<?php
echo
"<b>hello world !<b>";
  
 $clients = array (
	"Luc", 
	7 => "Paul", 
	2 =>"Martin", 
	"Arnaud"
  );
 echo "<br>".$clients[0];
 echo "<br>".$clients[8];
?>

</body>
</html>