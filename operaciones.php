<?php
class Operaciones
{

    public function suma($n1, $n2) {
        return  $n1 + $n2;
    }

    public function resta($n1, $n2) {
        return  $n1 - $n2;
    }

    public function multi($n1, $n2) {
        return  $n1 * $n2;
    }

    public function divi($n1, $n2) {
        return  $n1 / $n2;
    }
}

$calculadora = new Operaciones();

?>

