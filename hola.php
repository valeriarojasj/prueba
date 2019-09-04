<?php
$miNombre = 'Vale';
$miEdad = 37;
echo 'Mi nombre es: '. $miNombre . ' y mi edad es: ' . $miEdad;
$misHobbies = [
  'Submarinismo', 'Jugar Futbol'
];

var_dump($miNombre, $misHobbies);

echo $misHobbies[0] ;

$estoyLogeado = true;

var_dump($estoyLogeado);

if($estoyLogeado == True){
  echo 'El usuario esta logeado';
} else{
  echo 'Logeate por favor';
}
  $alumno1 = ['nombre'=>'Juan Ca', 'edad'=>33];
  $alumno2 = ['nombre'=>'Vale', 'edad'=>37];

var_dump ($alumno1['nombre']);


 ?>
