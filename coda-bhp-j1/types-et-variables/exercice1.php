<?php

$nb = 42;
echo $nb;

$str = "La vie l'univers et tout le reste";
echo $str;

$nbstr = "42.$str";
echo $nbstr;

$nb_tab = [3,2,5.05];
print_r($nb_tab);

$str_tab = ["bonjour","bienvenue","bon appetit"];
print_r($str_tab);

$animal = [
    "species" => "Tigre",
    "name" => "Zipette",
    "age" => 10000
];
print_r($animal);

$data = 42.0;
echo $data . "\n";

$int = (int)$data;
echo $int . "\n";

$str = (string)$int;
echo $str . "\n";
?>