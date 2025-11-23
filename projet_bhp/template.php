<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Épopée du Gland - <?php echo $titre; ?></title>
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
        .contenu-etape {
            background: white;
            padding: 25px;
            border-radius: 10px;
            border-left: 4px solid #8c9c6d;
            margin: 20px 0;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>🌰 L'Épopée du Gland 🌳</h1>
        
        <div class="contenu-etape">
            <h2><?php echo $titre; ?></h2>
            <p><?php echo $texte; ?></p>
            
            <div class="choix-container">
                <p style="text-align: center; font-weight: bold; color: #5d7b36; margin-top: 25px;">Que décidez-vous de faire ?</p>
                <?php foreach ($choix as $lien => $texte_choix): ?>
                    <a href="<?php echo $lien; ?>" class="choix">
                        <?php echo $texte_choix; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div style="margin-top: 30px; padding-top: 20px; border-top: 2px solid #e0d5b8; text-align: center;">
            <a href="index.php" class="recommencer">Recommencer depuis le début</a>
        </div>
    </div>
</body>
</html>