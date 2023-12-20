<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chercher un produit</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #8a2be2; /* Violet */
            color: #fff;
            text-align: center;
        }

        h1 {
            background-color: #4b0082; /* Indigo */
            padding: 20px;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Ajustement de la largeur maximale du formulaire */
            margin: 20px auto; /* Centre le formulaire horizontalement avec une marge extérieure */
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50; /* Green */
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: calc(100% - 20px);
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Chercher un produit</h1>

    <form action="index.php?page=nutriscore" method="post">
        <label for="codebar">CODE BAR :</label>
        <input type="text" name="codebar" required>
        <button type="submit">Chercher</button>
    </form>

</body>
</html>
