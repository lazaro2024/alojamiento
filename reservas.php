<?php
//recibir los datos del form html

$ciudad = $_POST[`ciudad`];
$checkin =$_POST[`checkin`];
$checkout = $_POST[`checkout`];
$huespedes =$_POST[`huspedes`];


echo("se ha realizado una reserva en la ciudad de" .$ciudad);
echo("se ha realizado una reserva para" .$huespedes "personas");
echo("se ha realizado una reserva para el checkin" .$checkin);
//mostrar cantidad de noches tomando en cuenta $checkin y $checkout

$fecha_inicio = new DataTime($checkin);
$fecha_salida = new DataTime($checkout);

$noches = $fecha_inicio->diff($fecha_salida);
$diasDiferencia = $noches->days;


echo("<br>Se ha realizado una reserva para " .$diasDiferencia. "noches");