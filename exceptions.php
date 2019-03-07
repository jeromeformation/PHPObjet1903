<?php

class Math {
    public function division(int $a, int $b): float
    {
        if($b === 0) {
            // Génération d'une exception
            $exception = new \Exception('Un dénominateur est différent de 0');

            var_dump($exception);
            die("ddddd");


            throw $exception;
        }
        return $a / $b;
    }
}

$math = new Math();

try {
    echo $math->division(10,0);
} catch (Exception $exception) {
    die('Finaaaaa');
}

/*
$exception = new Exception();
throw $exception;
*/