<?php

echo "<h2>Ejercicio 1</h2> <br>";

$numerospares = ["2", "4", "6", "8", "10"];

foreach ($numerospares as $value) {
  print "<p>$value</p>";
}

echo "<h2>Ejercicio 2</h2> <br>";

$alumnos = ["Pedro", "Ana", "34", "1"];

print_r ($alumnos);

echo "<h2>Ejercicio 3</h2> <br>";

$datos = ['Nombre' => "Pedro", 'Apellido' => "Torres", 'Dirección' => "Av. Mayor 3703", 'Teléfono' => "1122334455"];

echo "<h2>Ejercicio 4</h2> <br>";

$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

echo "La ciudad con el índice 0 tiene el nombre $ciudades[0] <br>", "La ciudad con el índice 1 tiene el nombre $ciudades[1] <br>",
"La ciudad con el índice 2 tiene el nombre $ciudades[2] <br>", "La ciudad con el índice 3 tiene el nombre $ciudades[3] <br>",
"La ciudad con el índice 4 tiene el nombre $ciudades[4] <br>", "La ciudad con el índice 5 tiene el nombre $ciudades[5] <br>";

echo "<h2>Ejercicio 5</h2> <br>";

$ciudades = ['MD'=>"Madrid", 'BCL'=>"Barcelona", 'LD'=>"Londres", 'NY'=>"New York", 'LA'=>"Los Ángeles", 'CCG'=>"Chicago"];

echo "El índice de $ciudades[MD] es MD. <br>", "El índice de $ciudades[BCL] es BCL. <br>", "El índice de $ciudades[LD] es LD. <br>",
"El índice de $ciudades[NY] es NY. <br>", "El índice de $ciudades[LA] es LA. <br>", "El índice de $ciudades[CCG] es CCG.";

 ?>
