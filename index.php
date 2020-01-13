<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Mon premier projet PHP</title>
    
</head>
<body>
        <!-- Début header -->
<header class="nav-menu">
	<label for="nav-toggle" class="nav-toggle-label"></label>
</header>
<!-- Début Menu Burgger -->
<input type="checkbox" id="nav-toggle" class="nav-toggle">				
<!-- Début Menu navigation -->
<ul id="menu-topo">
<ul>
<li><a href="index.php"><i class="icon-home"></i>Accueil</a></li>
<li><a href="tester.php">Réviser</a></li>
<li><a href="reviser.php"><i class="icon-thumbs-up-alt"></i>Tester</a></li>
<li><a href="cours.php"><i class="icon-gear"></i>Cours</a></li>

</ul>
</ul>
<!-- Main page -->
<div id="post-body">
<h1><span>Projet en PHP</span> Utiliser uniquement CSS et HTML</h1>
  
  <img src="../" />
  
  <p><b>L'objectif de ce projet</b> et de   créer un site avec du PHP qui permet aux utilisateurs de réviser leurs tables de multiplication.
  Une page index permettra de se rendre sur 2 pages différentes : une pour voir les tables et une pour tester ses connaissances.</p> 

  <p>La page pour voir les tables aura un formulaire qui permettra de sélectionner une ou plusieurs tables de multiplication (exemple : celle du 6, du 8, du 9), après soumission de celui-ci : les tables sélectionner apparaîtront en dessous de la page.</p>

  <p>La page pour tester ses connaissances aura un formulaire pour sélectionner une seule table cette fait. Une fois cette table sélectionnée vous ferez apparaître un nouveau formulaire (condition PHP pour générer du HTML à combiner avec la méthode du formulaire que vous désirez). Ce formulaire proposera un calcul à faire au hasard (ex : 6 fois 3 = ?) et aura un input dans lequel on pourra rentrer sa réponse. Une fois cette réponse soumise, on affichera si la réponse est bonne ou non et le formulaire proposera un nouveau calcul à faire (ex : 6 fois 8 = ?), etc…
.</p>

  <p>Objectif : Utiliser du PHP pour gérer vos pages (pour ne pas avoir à réécrire notre header et notre footer sur chaque page), utiliser les superglobales PHP : $_ et pourquoi pas découvrir une nouvelle superglobale qui pourrait vous aider pour garder des données le temps de visite du site (session), algorithmie, faire un beau site.</p>
</div>
 <!-- Début footer -->
<div class="footer">
  <p>Formation ASC 2019- 2020</p>
</div>
        

 <?php
 ?>   
</body>
</html>