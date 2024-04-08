
# Mini-projet Centre de formation 
 
Site internet de présentation du Centre de formation : INFO-tech
 
## Fonctionnalités
 
### Front-office

- Accueil : Liste des formations :
Word
Excel
Powerpoint 
Accès

- Page de détail : Présentation d'une réalisation
 Excel : a saisie de données, des calculs de gestions .La navigation dans Excel,Le formatage des cellule,Les graphiques,
Les tableaux croisés dynamiques ,La gestion des feuilles de calcul et des classeurs .

 word : creations des documents , Saisie de texte :Formatage de texte,Gestion des pages ,Révision et correction,Impression et partage ,Automatisation

Powerpoint : Création de diapositives,Utilisation des animations et des transitions,Insertion de médias,Ajout de commentaires et de notes,Préparation et présentation,Partage et exportation,Partage et exportation

### Back-office

- La  Creation d'un formulaire de contact :
 
## Structure des données
 
Une réalisation sera composée de :
 creation table utilisateurs
- Nom* : champs de texte de 80 caractères
prenom* : champs de texte de 80 caractères
 Email VARCHAR(100) UNIQUE,
     Mot_de_passe VARCHAR(255)

Creation TABLE Cours (
    ID_cours INT A
    Nom_du_cours VARCHAR(100),
    Description TEXT,
    Duree INT,
    Niveau VARCHAR(50));

- Description  : zone de texte
creation TABLE Inscriptions 
    ID_inscription INT AUTO_INCREMENT PRIMARY KEY,
    ID_utilisateur INT,
    ID_cours INT,
    Date_inscription :  date
  BDD  

* Champs obligatoires
 
## Etapes du projet
 
- Configuration de l'environnement de développement : vérifier configuration (xamp et visual studio), mise en place de l'arborescence, du fichier readme.md et du dépôt Git.

- Création de la BDD MySQL ainsi que les tables et les champs

- Création des pages PHP front-office

- Création des pages PHP back-office (si possible)

- Tests et recette : voir si les fonctionnalités prévues initialement sont présentes, faire des tests pour repérer les possibles bugs, optimisation du code, prise en compte de la sécurité.

- Mise en ligne (si possible)
 
## Script PHP - Page d'accueil
 
- 1) Connexion à la base de données

- 2) Requête SELECT de récupération les informations (musiques, articles, voitures, ...)

- 3) Boucler sur le résultat pour afficher chaque information.
 
## Script PHP - Page détails
 