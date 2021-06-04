<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $name = $_GET["name"]
    $mail = $_GET["mail"]
    $age = $_GET["age"]

    if(count($name) >= 3 && strpos("@",$mail) && strpos(".", $mail) && is_numeric(mixed $age) ){
  ?>
    <h1>accesso eseguito</h1>
  <?php
    }else{

  ?>
  <h1>accesso negato</h1>
  <?php
    }
  ?>
</body>
</html>