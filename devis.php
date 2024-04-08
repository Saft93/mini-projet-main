<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Devis Formation Bureautique</title>
    <style>
        body {
            font-family: "Roboto Slab", serif;
        }
        table {
        
            width: 100%;

            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 3px solid #ddd;
            text-align: left;
            margin-top: 50px;
        }
        th {
            background-color: #f2f2f2;
        }
            .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
    </style>
</head>
<body>
    <header>
        <div class="st">
            <nav><a href="projet.php">Accueil</a></nav>
            <nav><a href="Inscription.html">Inscription</a></nav>
            <nav><a href="devis.php">Devis</a></nav>
        </div>
    </header>
        <div class="container">
            <h2>Devis Formation Bureautique</h2>
    <table>
        <tr>
            <th>Module</th>
            <th>Durée (Mois)</th>
            <th>Prix (EUR)</th>
        </tr>
        <tr>
            <td>Microsoft Word</td>
            <td>3</td>
            <td>300</td>
        </tr>
        <td>Microsoft Excel</td>
        <td>3</td>
            <td>350</td>
        </tr>
        <td>Microsoft Acces</td>
            <td>3</td>
            <td>350</td>
        </tr>
        <tr>
            <td>Microsoft PowerPoint</td>
            <td>3</td>
            <td>400</td>
        </tr>
    </table>
        <p>Total: <?php echo 300 + 350 +350 + 400; ?> EURO</p>
     <tr>
     </div>
            <!-- <td>Microsoft Access</td> -->
            <!-- <h1>Devis Formation</h1> -->
    <!-- <form action="projet.php" method="POST">
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" required><br>

        <label for="email">Email:</label><br>
        <input data-="" type="email" id="email" name="email" required><br>


        <label for="telephone">Téléphone:</label><br>
        <input type="tel" id="telephone" name="telephone" required>
        <h2>Formations:</h2>
        <input type="checkbox" id="word" name="formations[200]" value="Word">
        <label for="word">Word</label><br>

        <input type="checkbox" id="excel" name="formations[500]" value="Excel">
        <label for="excel">Excel</label><br>

        <input type="checkbox" id="powerpoint" name="formations[300]" value="PowerPoint">
        <label for="powerpoint">PowerPoint</label><br>
        
        <input type="checkbox" id="acces" name="formations[200]" value="acces">
        <label for="acces">Acces</label><br>

        <label for="budget">Budget total prévu pour les formations:</label><br>
        <input type="number" id="budget" name="budget" required><br><br>

        <label for="date_debut">Date de début souhaitée:</label><br>
        <input type="date" id="date_debut" name="date_debut" required><br><br>

        <label for="commentaires">Commentaires:</label><br>
        <textarea id="commentaires" name="commentaires" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Envoyer">
    </form>    -->
</body>
</html>
