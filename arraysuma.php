<!-- ESCRIBIR UN PROGRAMA CREANDO UNA FUNCION QUE PASADO UN ARRAY DE NUMEROS NOS DIGA LA SUMA DE TODOS ELLOS -->
<?php
$arraysum=[1,2,7,11,65,23,45,89,67,2,5];
function suma(array $arraysum){
    $count = 0;
    foreach ($arraysum as $num){
        $count += $num;
    }
    return $count;
}
echo suma($arraysum);
?>