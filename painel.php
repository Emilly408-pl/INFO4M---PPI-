<?php
include ('protect.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bem Vindo ao painel, <?php  echo $_SESSION [ 'nome' ]?>

<div> 
    <a href = "logout.php">
</div>

</body>
</html>