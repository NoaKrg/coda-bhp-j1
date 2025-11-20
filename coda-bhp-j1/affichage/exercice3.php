<?php
    $title = "Le titre de ma page";
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <h1>
            <?php echo $title; ?>
        </h1>
    </body>
</html>

<?php
    $connectedUser = false;
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <header>
            <nav>
                <?php if (!$connectedUser): ?>
                    <a href="#">Connexion</a>
                <?php else: ?>
                    <a href="#">Déconnexion</a>
                <?php endif; ?>
            </nav>
        </header>
    </body>
</html>

<?php
    $users = [
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny"
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit"
        ]
    ];
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <h1>
            Liste des utilisateurs
        </h1>
        <ul>
            <?php foreach ($users as $user): ?>
                <li><?php echo $user["firstName"] . " " . $user["lastName"]; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>

<?php
    $users = [
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny",
            "age" => 29
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit",
            "age" => 17
        ]
    ];
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>
            Liste des utilisateurs
        </h1>
        <ul>
            <?php foreach ($users as $user): ?>
                <li>
                    <?php echo $user["firstName"] . " " . $user["lastName"]; ?>
                    - 
                    <?php if ($user["age"] >= 18): ?>
                        Majeur
                    <?php else: ?>
                        Mineur
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>

<?php
    $grades = [
        "french" => [12, 9, 13],
        "english" => [18, 12, 11],
        "maths" => [15, 11, 13]
    ];
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <h1>
            Liste des notes
        </h1>
        <ul>
            <?php foreach ($grades as $subject => $notes): ?>
                <li>
                    <strong><?php echo ucfirst($subject); ?> :</strong>
                    <?php echo implode(", ", $notes); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>

