<?php

$d = new DateTime('2020-01-15');
echo $d->format('Y-m-d')."\n\n";


echo "Datetime sin argumentos\n";
$d = new DateTime();
echo $d->format('Y-m-d')."\n\n";

echo "Datetime en palabras \n";
echo (new Datetime('last day of this month'))->format('Y-m-d')."\n";
echo (new Datetime('last day of 2020-02'))->format('Y-m-d')."\n";
echo "\n\n";

echo "Creación de DateTime from String\n";
$fecha = DateTime::createFromFormat('Ym', '202003');
$fecha->modify('last day of');
echo $fecha->format('Y-m-d');
echo "\n\n";


