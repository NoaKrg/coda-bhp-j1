<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Épopée du Gland - Accueil</title>
    <style>
        body { 
            font-family: 'Georgia', serif; 
            max-width: 800px; 
            margin: 0 auto; 
            padding: 20px; 
            background-color: #f8f5e6; 
            line-height: 1.6;
            color: #333;
        }
        .container { 
            background: #fffdf0; 
            padding: 30px; 
            border-radius: 15px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); 
            border: 2px solid #e0d5b8;
            text-align: center;
        }
        h1 {
            color: #5d7b36;
            border-bottom: 2px solid #e0d5b8;
            padding-bottom: 10px;
        }
        .intro {
            background: white;
            padding: 25px;
            border-radius: 10px;
            border-left: 4px solid #8c9c6d;
            margin: 20px 0;
            text-align: left;
        }
        .choix {
            display: block;
            background: #8c9c6d; 
            color: white; 
            padding: 15px 25px; 
            margin: 15px 0; 
            border: none; 
            border-radius: 8px; 
            text-decoration: none; 
            text-align: center;
            transition: all 0.3s ease;
            font-size: 1.1em;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .choix:hover { 
            background: #5d7b36; 
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🌰 L'Épopée du Gland 🌳</h1>
        
        <div class="intro">
            <p><strong>Vous êtes Gland, un petit gland accroché à la branche mère de votre grand chêne protecteur.</strong></p>
            <p>En dessous de vous s'étend le Vaste Monde, un endroit à la fois effrayant et fascinant. Le vent vous chuchote des histoires de forêts, de rivières et de soleil. Mais il vous murmure aussi des avertissements sur les écureuils affamés, les champignons voraces et la pierraille impitoyable.</p>
            <p>Votre rêve, votre destin, est de devenir un chêne puissant. Mais pour cela, il faut lâcher prise. Il faut tomber.</p>
            <p>Votre coque est encore verte, mais vous sentez que le moment est venu. <strong>Que décidez-vous de faire ?</strong></p>
        </div>

        <div class="choix-container">
            <a href="etape2.php" class="choix">Vous laisser tomber immédiatement</a>
            <a href="etape3.php" class="choix">Attendre qu'une bourrasque de vent vous arrache</a>
            <a href="etape4.php" class="choix">Vous rapprocher du tronc pour une descente plus lente</a>
        </div>
    </div>
</body>
</html>