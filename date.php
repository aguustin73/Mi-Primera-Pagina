<?php 
//var_dump ($_POST);
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos - PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1 class="sub"><?php echo $nombre ?>  Gracias por contactarte con nosotros, en breve nos comunicaremos a <?php echo $email ?> </h1>
   
</body>
</html>
