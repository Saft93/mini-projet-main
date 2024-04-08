<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info-tech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CENTRE DE FORMATION INFO-TECH</h1>
    <header>
        <div class="navigation">
            <nav> <a href="projet.php">Accueil</a></nav>
            <nav> <a href="Inscription.html">Inscription</a></nav>
            <nav> <a href="devis.php">Devis</a></nav>
        </div>
    </header>
        <h2>Programme du centre de formation INFO-TECH</h2>
    <div class="contenairImage">
        <img src="../projet1/images/excel.png" alt="Excel">
        <img src="../projet1/images/WORD (1).png" alt="Word">
        <img src="../projet1/images/Acces4.png" alt="Acces">
        <img src="../projet1/images/powerpoint.png" alt="Powerpoint">
    </div>
       <p>
        Le Centre de Formation offre un programme complet spécialisé dans l'enseignement de Word, Excel, Access et PowerPoint, les piliers fondamentaux de la productivité bureautique. Notre équipe d'instructeurs qualifiés propose des cours interactifs et personnalisés, adaptés à tous les niveaux, afin de permettre aux apprenants de maîtriser efficacement ces outils essentiels. Grâce à des méthodes d'apprentissage innovantes et des exercices pratiques, nos participants acquièrent des compétences concrètes et sont prêts à relever les défis du monde professionnel. Rejoignez-nous pour développer 
        votre expertise et votre efficacité dans le domaine de la bureautique.
       </p>
    <div class="contenairvideo">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/I2WLDJLc70M?si=ZeEZeZIy6u0Mt4gF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
         referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        </iframe>
    </div>
    <?php
        $serveur = "localhost";
        $utilisateur = "root";
        $mot_de_passe = "";
        $base_de_donnees = "info_tech";
        // Établir la connexion
        $connexion = mysqli_connect($serveur, $utilisateur,
        $mot_de_passe, $base_de_donnees);
        // Vérifier la connexion
        if (!$connexion) {
        die("Échec de la connexion : " . mysqli_connect_error());
        } else {
        // echo "Connexion réussie à la base de données.";
        // print_r($connexion);
        }
        echo "<br>";
        $sql = "SELECT * FROM cours";
        $cours = mysqli_query($connexion, $sql);
        // Vérifier si la requête a réussi
        echo "<ul>";
            if ($cours) {
                // print_r($cours);
                foreach($cours as $cour) {
                    echo "<li class='element'>" . $cour['nom_du_cours'] .'</>'.  "<br>". "</li>";
                }
            } else {
                echo "Erreur : " . mysqli_error($connexion);
            }
            echo "</ul>";
        // Fermer la connexion
        echo "<br>";
        if ($cours) {
            // print_r($cours);
            foreach($cours as $cour) {
                echo '<strong>' . $cour['nom_du_cours'] . "<br>".  $cour['description'] . '</strong>'. '<br>';
            }
        } else {
        echo "Erreur : " . mysqli_error($connexion);
        }
        echo "<br>";

    $sql = "SELECT utilisateurs.nom, utilisateurs.prenom, utilisateurs.email, cours.nom_du_cours, inscription.date_inscription
        FROM inscription
        INNER JOIN utilisateurs ON inscription.id_utilisateurs = utilisateurs.id_utilisateurs
        INNER JOIN cours ON inscription.id_cours = cours.id_cours";

    $inscription = mysqli_query($connexion, $sql);
    echo "<strong class ='listes'>" . "La liste des inscrits :"  . "</strong>" ."<br>";
    echo "<br>" ;
if ($inscription) {
    while ($row = mysqli_fetch_assoc($inscription)) {
        echo "Nom : " . $row['nom'] . "<br>";
        echo "Prénom : " . $row['prenom'] . "<br>";
        echo "Email : " . $row['email'] . "<br>";
        echo "Nom du cours : " . $row['nom_du_cours'] . "<br>";
        echo "Date d'inscription : " . $row ['date_inscription'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Erreur : " . mysqli_error($connexion);
}
if (!empty($_POST)) {
    $nom = mysqli_real_escape_string($connexion, $_POST["nom"]);
    $prenom = mysqli_real_escape_string($connexion, $_POST["prenom"]);
    $gmail = mysqli_real_escape_string($connexion, $_POST["gmail"]);
    $mot_de_passe = mysqli_real_escape_string($connexion, $_POST["password"]);
    $sql = "SELECT`id_utilisateurs`
    FROM `utilisateurs` WHERE email= '$gmail' and mot_de_passe = '$mot_de_passe' LIMIT 1";
    $resultat =  mysqli_query($connexion, $sql);
    if ($resultat->num_rows > 0) {
        $result = $resultat->fetch_assoc();
        $utilisateur = $result["id_utilisateurs"];
    } else {
    // Si l'utilisateur n'existe pas, ajouter l'utilisateur dans la base de données
    $sql = "INSERT INTO utilisateurs (`nom`, `prenom`, `email`,`mot_de_passe`)
    VALUES ('$nom', '$prenom', '$gmail', '$mot_de_passe')";
    mysqli_query($connexion, $sql);

    $sql = "SELECT`id_utilisateurs`
    FROM `utilisateurs` ORDER BY id_utilisateurs desc LIMIT 1";
    $resultat =  mysqli_query($connexion, $sql);
    $result = $resultat->fetch_assoc();
    $utilisateur = $result["id_utilisateurs"];

    }
    $objet = mysqli_real_escape_string($connexion, $_POST["objet"]);
    $sql = "INSERT INTO `inscription`(`id_cours`, `id_utilisateurs`, `date_inscription`)
    VALUES ('$objet','$utilisateur',NOW())";
    mysqli_query($connexion, $sql);

    // print_r($utilisateur);
    mysqli_close($connexion);
}

?>

<h1>Nous avons bien reçu votre message !</h1>
Nom : <?php echo ($_POST['nom']) . '<br />' ; ?>
E-mail: <?php echo $_POST['gmail'] . '<br />';?>
Prénom: <?php echo $_POST['prenom'] . '<br />';?>
contact : <?php echo $_POST['objet'] . '<br />';?>
Abonnement Newsletter:   <?php echo $_POST['contact'] . '<br />';?>
Date de naissance :  <?php echo $_POST['date'] . '<br />';?>

 <?php
// $nom = "Moussa";
// $prenom = "Moustapha";
// $gmail = "moustaphasabirm@example.com";

// // Définir le cookie avec le nom, prénom et adresse e-mail
// setcookie("nom", $nom, time() + 3600, "/");
// setcookie("prenom", $prenom, time() + 3600, "/");
// setcookie("gmail", $gmail, time() + 3600, "/");

// // Afficher le contenu du cookie "nom"
// echo $_COOKIE["nom"];

// // Vérifier si les cookies "nom" et "prenom" sont définis
// if (isset($_COOKIE["nom"]) && isset($_COOKIE["prenom"])) {
//     // Afficher un message de bienvenue avec le nom et le prénom
//     echo "Bienvenue " . $_COOKIE["nom"] . " " . $_COOKIE["prenom"];
// } else {
//     // Afficher un message de bienvenue pour un visiteur non identifié
//     echo "Bienvenue, Visiteur";
// }

?>
</body>
</html>