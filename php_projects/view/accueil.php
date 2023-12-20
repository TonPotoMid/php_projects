<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRIPPIN</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #8a2be2; /* Violet */
            color: #fff;
        }

        header {
            background-color: #7f00ff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 2em;
            color: #55acee;
        }

        nav {
            background-color: #7f00ff;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1.2em;
        }

        section {
            padding: 20px;
        }

        .featured-game {
            text-align: center;
            margin-bottom: 20px;
        }

        .featured-game img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        footer {
            background-color: #111;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>DRIPPIN</h1>
</header>

<section>
    <div class="featured-game">
        <h2>Les nouvelles sorties !</h2>
        <img src="pullviolet.jpg" alt="Habits en Vedette">
        <p></p>
    </div>

    <h2>Nouveautés</h2>
    <div class="game-list">
        <!-- Liste de jeux récents -->
        <div class="game">
            <img src="pullviolet.jpg" alt="Turtle Neck Violet">
            <h3>Turtle Neck Violet</h3>
            <p>Sorties spéciales Hiver !.</p>
            <a href="#">Acheter</a>
        </div>
        <div class="game">
            <img src="pullviolet.jpg" alt="Nom du Jeu 2">
            <h3>Drippy Shoes</h3>
            <p>Description du Jeu 2.</p>
            <a href="#">Acheter</a>
        </div>
        <!-- Ajoutez d'autres jeux selon vos besoins -->
    </div>
</section>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Gamium Inc. Tous droits réservés.</p>
</footer>

</body>
</html>
