<?php 
// PHP: PHP hypertext preprocesor


// Declaracion: con el simbolo $ por delante y comenzando con un guion bajo o letra.
$variable1 = 'variable 1';
$variable1 = 1010101;

//Tipos: los tipos se asignan dinamicamente, el tipo que tenga en frente lo interpreta y lo asigna.
$texto1 = "texto1"; //texto
$texto2 = "10";
$numero1 = 15; //entero (integer)
$numero2 = 30.5; //double
$boleano = true; //booleano
$boleano2 = false; //vacio ( una de las excepciones en cuanto a leer el tipo)

//imprimir valores en pantalla
echo ($boleano2); //echo imprime en pantalla el parametro que le enviemos , no son necesarios los parentesis pero son recomendables para delimitar bien
//permite tambien imprimir codigo html. 

//concatenar valores: se realiza con un punto
//hay que tener cuidado de no usar el simbolo +, en php es puramente aritmetico. 
$resultado1 = $texto1 . $texto2;

//imprimir tipos en pantalla: metodo gettype()
echo(gettype($texto1));
echo(gettype($numero1));
echo(gettype($boleano));

//reasignacion: la reasignacion es simple, solamente es necesario mencionar la variable y asignar un nuevo valor para los tipos simples
$texto1 = '<p>otro valor</p>';
echo ($texto1);

//imprimir la variable completa con var_dump, va a mostrar todos los aspectos de la variable. 
echo 'valor: ' . $texto1 . '<br>';
echo 'tipo: ' . gettype($texto1) . '<br>';
echo var_dump($boleano);
echo var_dump($boleano2);

// los is, is_null, is_empty, is_set;
//ver assets is para referencia

// Operadores aritmeticos : + - * / % 
//min y max
echo '<p> min:'.min(-10,-15,15,20) . '</p>';
echo '<p> min:'.max(-10,-15,15,20) . '</p>';
//round()
echo '<p> round:'.round(35.1) . '</p>';
//rand() : acepta dos parametros 
echo '<p> random:'.rand(-100,45) . '</p>';
//sqrt: raiz
echo '<p> raiz cuadrtada:'.sqrt(25) . '</p>';
//pow: elevado
echo '<p> exponente:'.pow(5,3) . '</p>';
echo '<p> exponente:'.pow(125,1/3) . '</p>';

//arrays
$array1 = array(2,3,4,'textoarray',true,125);
echo 'array 1:' . $array1[1]. '<br>';
echo 'array 2:' . $array1[2]. '<br>';
echo 'array 4:' . $array1[4]. '<br>';
echo 'array 6:' . $array1[5]. '<br>';

$array2 = array('nombre' => 'Max','apellido' => 'Bernasconi');
echo 'Nombre:' . $array2['nombre']. '<br>';
echo 'Apellido:' . $array2['apellido']. '<br>';

//metodos: if, while, for, forech.

for($i = 0; $i< count($array1); $i++)
{
    echo 'array1['. $i . ']: '. $array1[$i]. '<br>';
}

foreach($array2 as $llave => $valor){
    echo 'array2['.$llave.']:'. $valor . '<br>';
}

$verdadero = 10 < 15;
$falso = (10 === '10');

if($verdadero){
    echo "verdadero". '<br>';
}
if($falso){
    echo "verdadero". '<br>';
}
elseif($falso === $verdadero)
{
        echo "elseif". '<br>';
}
else{
    echo "falso". '<br>';
}

$contador = 0;
$limite = 3;
while($contador < $limite)
{
echo 'Contador: '.  $contador .'<br>';
$contador++;
}

//metodos de arrays
//sort
$base = array(3,5,6,12,645,-12, 56, 2 , 33);
sort($base);
for($i = 0; $i< count($base); $i++)
{
    echo 'sort['. $i . ']: '. $base[$i]. '<br>';
}
echo '<hr>';
//rsort
$base = array(3,5,6,12,645,-12, 56, 2 , 33);
rsort($base);
for($i = 0; $i< count($base); $i++)
{
    echo 'rsort['. $i . ']: '. $base[$i]. '<br>';
}
echo '<hr>';
//sort de asosiacitovos asort (por valores)
$asorteo = array('uno'=>'z', 'dos' => 'b', 'tres' => 'g',);
asort($asorteo);
foreach($asorteo as $llave => $valor){
    echo 'asorteo['.$llave.']:'. $valor . '<br>';
}
echo '<hr>';
//sort de asosiacitovos ksort (por valores)
$ksorteo = array('tercero'=>'z', 'segundo' => 'b', 'primero' => 'g',);
ksort($ksorteo);
foreach($ksorteo as $llave => $valor){
    echo 'ksorteo['.$llave.']:'. $valor . '<br>';
}
// Constantes

//define ( nombre, valor, casesensitive)
define('CONSTMAX','Este valor es una constante');

echo CONSTMAX;

// funciones
echo '<hr>';

function mifuncion($valor1){
    echo $valor1 . '<br>';
}

mifuncion('escribir esto');
mifuncion(10);

//include e include_once
include('./ejemplo.php');
include('./ejemplo.php');
include('./ejemplo.php');
include('./ejemplo.php');
include('./ejemplo.php');

//require y require once

require('./ejemplo.php');
?>