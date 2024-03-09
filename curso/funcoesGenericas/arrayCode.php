<?php
  //associative arrays
  $capitals = array("Parana" => "Curitiba",
                    "Santa Catarina" => "Florianopolis",
                    "Goias" => "Goiania");

  //array_pop($capitals); //Deleta o ultimo valor do array
  //array_shift($capitals); //Remove o primeiro valor do array
  //$keys = array_keys($capitals); //Cria um array com as keys do array parametro
  //$values = array_values($capitals); //Cria um array com os valores do array parametro
  //$capitals = array_flip($capitals); //Troca as keys com os valores
  //$capitals = array_reverse($capitals); //Inverte a ordem do array
  //count($capitals); //Retorna a quantidade de pares/valores no array
  //array_push($capitals, "Bahia" => "Salvador");

  foreach($capitals as $key => $values){
    echo "{$key} = {$value} <br>";
  }

?>

