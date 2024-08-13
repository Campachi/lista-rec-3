<?php
$data = "13-08-2024"; 
$timestamp = strtotime($data);
$diaDaSemana = date('l', $timestamp);


$diasDaSemana = [
    'Monday' => 'Segunda-feira',
    'Tuesday' => 'Terça-feira',
    'Wednesday' => 'Quarta-feira',
    'Thursday' => 'Quinta-feira',
    'Friday' => 'Sexta-feira',
    'Saturday' => 'Sábado',
    'Sunday' => 'Domingo'
];
echo "Dia da semana: " . $diasDaSemana[$diaDaSemana];
?>
