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
<?php 
session_start();
?>
<header class="nav-menu">
	<label for="nav-toggle" class="nav-toggle-label"></label>
</header>

<input type="checkbox" id="nav-toggle" class="nav-toggle">				

<ul id="menu-topo">
<ul>
<li><a href="index.php"><i class="icon-home"></i>Accueil</a></li>
<li><a href="tester.php">Réviser</a></li>
<li><a href="reviser.php"><i class="icon-thumbs-up-alt"></i>Tester</a></li>
<li><a href="cours.php"><i class="icon-gear"></i>Cours</a></li>

</ul>
</ul>

<div id="post-body">
<h1><span>Tester </span>vos connaissances</h1>
 <br>
<form action="reviser.php" method="post">

<p>Sélectionner une table</p>	
<select name="choix-nbr" id ="choix-nbr" >
    <?php	
    $_POST['nbr']=$_SESSION['form']['nbr'];
    for ($i=1;$i<=10;$i++)	
        {
        if ($i==$_POST['nbr']) echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
        else echo '<option value="'.$i.'">'.$i.'</option>';
        }
    ?>
</select>
<br>
<br>
<br>


</form>
<?php
//On traite le formulaire
echo "<input type=\"number\" name=\"saisie\" value=\"reponse\" >";

echo"<input type=\"submit\" value=\"Valider\" >";
$random1=rand(1, 10);
$random2=rand(1,10);
$mult=$random1*$random2;
echo "<br>";
echo $random1."X".$random2."="."?";
if(isset($_POST['reponse']) && $_POST['reponse']==$mult ){
echo"Bonne reponse";
}
?>


</p>
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