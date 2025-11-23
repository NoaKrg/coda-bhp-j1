<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Épopée du Gland - Fin</title>
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
        }
        h1 {
            color: #5d7b36;
            border-bottom: 2px solid #e0d5b8;
            padding-bottom: 10px;
        }
        .fin { 
            padding: 30px; 
            border-radius: 10px; 
            font-weight: bold; 
            text-align: center;
            margin: 25px 0;
            font-size: 1.3em;
            line-height: 1.8;
        }
        .victoire { 
            background: #e8f5e8; 
            border: 3px solid #4caf50;
            color: #2e7d32;
        }
        .defaite { 
            background: #ffebee; 
            border: 3px solid #f44336;
            color: #c62828;
        }
        .recommencer { 
            display: inline-block;
            background: #5d7b36; 
            color: white; 
            padding: 12px 24px; 
            margin-top: 20px;
            border-radius: 6px; 
            text-decoration: none; 
            font-weight: bold;
            transition: background 0.3s;
        }
        .recommencer:hover { 
            background: #465a29; 
        }
        .info-fin {
            font-style: italic;
            margin-top: 15px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🌰 L'Épopée du Gland 🌳</h1>
        
        <div class="fin <?php echo $type_fin; ?>">
            <h2>Fin de l'aventure</h2>
            <p><?php echo $fin; ?></p>
            <div class="info-fin">
                <?php if ($type_fin == 'victoire'): ?>
                    Vous avez réalisé votre destin !
                <?php else: ?>
                    Votre quête s'arrête ici...
                <?php endif; ?>
            </div>
            <a href="index.php" class="recommencer">Vivre une nouvelle aventure</a>
        </div>
    </div>
</body>
</html>