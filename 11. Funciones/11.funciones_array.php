<?php 

// $amigo = array('telefono' => 6545647, 'altura'=>175, 'ciudad'=>'Castelldefels');

// extract($amigo); //extrae las claves de un array asociativo como si fueran variables
// echo $telefono;
// echo $altura;
// echo $ciudad;

$semana = array(
	'Lunes', 'Martes', 'Miercoles',
 	'Jueves', 'Viernes', 'Sabado', 'Domingo'
);

$semana1 = array(
	'Lunes', 'Martes', 'Miercoles',
 	'Jueves', 'Viernes', 'Sabado', 'Domingo'
);
$semana2 = array(
	'Lunes', 'Martes', 'Miercoles',
 	'Jueves', 'Viernes', 'Sabado'
);
// $ultimo_dia = array_pop($semana); //Extraer el último valor del array en $semana y guardandolo en la variable $ultimo_dia
// foreach ($semana as $dia) {
// 	echo $dia . '<br />';
// }
// echo $ultimo_dia;

// echo join('<br />', $semana); //Une los valores de array con un salto de linea

// echo count($semana); //cuenta cuandos dias hay en el array $semana

// rsort($semana);
// echo join(', ', $semana);

$semana_reverse = array_reverse($semana); //Orden inverso del array
echo join(', ', $semana_reverse);
echo '<br>';


//Ejercicio de añadir 'y' en el ultimo valor del array
$ultimo_dia = array_pop($semana1); //array_pop sirve para leer el ultimo array
echo join(', <br />', $semana1);
echo ' y <br />', $ultimo_dia;
?>