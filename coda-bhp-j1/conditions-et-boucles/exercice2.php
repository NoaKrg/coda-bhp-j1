<?php
$animals = ["Chat", "Chien", "Lapin", "Souris"];

foreach ($animals as $animal) {
    echo $animal . "\n";
}

$numbers = [28, 32, 44, -67, 18, 24, -98];

foreach ($numbers as $number) {
    if ($number < 0) {
        echo $number . "\n";
    }
}

$user = [
    "name" => "James",
    "age" => 28
];

foreach ($user as $key => $value) {
    if ($key === "name") {
        echo "My name is " . $value . ".\n";
    } elseif ($key === "age") {
        echo "My age is " . $value . ".\n";
    }
}

$users = [
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ],
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ]
];

foreach ($users as $user) {
    echo $user["firstName"] . " " . $user["lastName"] . "\n";
}
?>

