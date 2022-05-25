<?php
/**
  *  @author Marcos
  *  @version 1.0
*/

  /**
    * Función suma de dos números
    * @param int $num1
    * @param int $num2
    * @return float
    * @internal  Con esta anotación se vuelve solo para desarrolladores
  */

  function suma ($num1, $num2) {
      $resultadosuma = $num1 + $num2;
      return $resultadosuma;

  }
  //Esto es un cambio

$suma = suma (24,42);
echo $suma;

?>
