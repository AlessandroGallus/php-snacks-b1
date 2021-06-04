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
    $squadre =[
      1 =>[
        "nome_squadra" => 'Olimpia Milano',
        "totale_punti" => rand(1,99)
      ],
      2 =>[
        "nome_squadra" => 'Cantù',
        "totale_punti" => rand(1,99)
      ]
    ];
    var_dump($squadre);
  ?>
</body>
</html>