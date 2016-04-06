<!DOCTYPE html>
<html>
<head>
<title>hello world en php !</title>
</head>
<body>

<?php
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $element)
{
    echo $element . '<br />';
}
?>

</body>
</html>

