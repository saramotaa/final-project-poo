<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Exemplo Vídeo</title>
  </head>
  <body> 
    <h1>EXEMPLO DO VÍDEO</h1>
    <pre>
    <?php
      require_once "video.php";
      require_once "pessoa.php";
      require_once "inscrito.php";
      require_once "visualizacao.php";

      $i[0] = new Inscrito("Sara", 20, "F", "saramotaa_");
      $i[1] = new Inscrito("Gabriel", 23, "M", "gabrielel");
      $i[2] = new Inscrito("Marcela", 26, "F", "cela_mar");

      $v[0] = new Video("Como fazer bolo de chocolate");
      $v[1] = new Video("Cachorros engraçados");
      $v[2] = new Video("Pegadinhas");

      $vis[0] = new Visualizacao($i[0], $v[0]);
      $vis[1] = new Visualizacao($i[0], $v[1]);
      $vis[2] = new Visualizacao($i[1], $v[1]);
      $vis[0]->avaliar();
      $vis[1]->avaliarPorc(85);
      $vis[2]->avaliarNota(7);

      print_r($vis);
      

    ?>
    </pre>
  </body>
</html>