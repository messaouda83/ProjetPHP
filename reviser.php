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
<header class="nav-menu">
	<label for="nav-toggle" class="nav-toggle-label"></label>
</header>

<input type="checkbox" id="nav-toggle" class="nav-toggle">				

<ul id="menu-topo">
<ul>
<li><a href="index.php">Accueil</a></li>
<li><a href="reviser.php">Réviser</a></li>
<li><a href="tester.php">Tester</a></li>


</ul>
</ul>

<div id="post-body">
<h1><span>Réviser</span> les tables de multiplications</h1>
 <br>
<form action="reviser.php" method="post">

<?php

for($i=1; $i<=10; $i++){
    echo"<input type=\"checkbox\" name=\"choix[]\" value=\"$i\">$i ";
}
?>
<br>
<br>
<br>

<input type="submit" value="Afficher tables de multiplications" >


</form>
 
<?php


if (isset($_POST['choix'])) {

    var_dump($_POST['choix']);



    foreach ($_POST['choix'] as $key => $value){
           

      
     for($i=1; $i<=10; $i++)
     {
         $result = $value*$i;
         echo'<br>';
         echo"$value*$i = $result<br>";
     
     }

     echo"<br>";
   
    }
    
}

/*  
$tab1=[1,2,3,4,5,6,7,8,9,10];
for($i=1;$i<=10; $i++){
    echo"<tr>";
    for($j=1;$j<=10; $j++){
     echo("<td>".$i*$j."</td>");
    }
    echo"</tr>";

}
*/
?></p>
</div>
 <!-- Début footer -->
<div class="footer">
  <p>Formation ASC 2019- 2020</p>
</div>
        
 <!-- Fin footer -->
 <?php
 ?>   
</body>
</html>