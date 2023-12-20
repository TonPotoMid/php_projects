<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav img {
            max-height: 50px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #555;
            color: #ffd700; /* couleur or pour le survol */
        }

        nav a:active {
            background-color: #333;
            color: #ffd700; /* couleur or pour le clic */
        }

        hr {
            border: 1px solid #ddd;
            margin: 0;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <img src="https://picsum.photos/150/50" alt="Logo">
            <a href="index.php?page=accueil">Accueil</a>
            <a href="index.php?page=Drip">Drip Searcher</a>
            <a href="index.php?page=contact">Contact</a>
            <a href="?page=articles">Articles</a>

            <?php if (!isset($_SESSION['nom'])) { ?>
                <a href="?page=inscription">Inscription</a>
                <a href="?page=authentification">Authentification</a>
            <?php } else { ?>
                <span>Bonjour <?= @$_SESSION['nom'] ?></span>
                <a href="?page=exit">Se déconnecter</a>
            <?php } ?>
        </nav>
    </header>

    <hr>

</body>
</html>
