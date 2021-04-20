<?php
/**Función que comprueba la longitud máxima de carácteres de la variable indicada
 * @version 1.0.0
 * @author Nazaret Moreno
 * @internal Esta función puede ser reutilizada
 * @param $variable variable a comprobar
 * @param $max variable que indica el máximo de caracteres permitidos 
 * @return Devolverá true o false según si pasa o no la validación
 */
function comprueba_caracteres_max($variable, $max){

    return strlen($variable) <= $max;
}

/**Función que suma dos elementos
 * @version 1.0.0
 * @author Nazaret Moreno
 * @internal Esta función puede ser reutilizada
 * @param $a variable a sumar
 * @param $b variable a sumar
 * @return Devolverá la suma de las variables anteriores
 */
function suma($a, $b){
   
    return $a + $b;
}
?>

