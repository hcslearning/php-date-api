<?php

$d = new DateTime('2020-01-15');
echo $d->format('Y-m-d')."\n\n";


echo "DateTime sin argumentos\n";
$d = new DateTime();
echo $d->format('Y-m-d')."\n";
