<?php

$dataCompleta = "2024-08-13"; 
        $timestamp = strtotime($dataCompleta);


    $dia = date('d', $timestamp);
         $mes = date('m', $timestamp);
    $ano = date('Y', $timestamp);

    echo "Dia: " . $dia . "<br>";
    echo "Mês: " . $mes . "<br>";
    echo "Ano: " . $ano . "<br>";
?>
