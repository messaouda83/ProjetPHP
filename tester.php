<?php 
session_start();

?>
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
<li><a href="index.php"><i class="icon-home"></i>Accueil</a></li>
<li><a href="reviser.php">Réviser</a></li>
<li><a href="tester.php">Tester</a></li>


</ul>
</ul>

<div id="post-body">
<h1><span>Tester </span>vos connaissances</h1>
 <br>
<form action="tester.php" method="get">

<p>Sélectionner une table</p>	
<select name="select" id ="select" >
    <?php	
  
    $_GET['nbr']=$_SESSION['form']['nbr'];
    for ($i=1;$i<=10;$i++)	
        {
        if ($i==$_GET['nbr']) echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
        else echo '<option value="'.$i.'">'.$i.'</option>';
        }
      

    ?>
</select>
<input name="Envoyer" type="submit" value="confirmer" >
</form>
<form action="tester.php" method="post" >
<?php
 
if(isset($_GET['select'])){
   $random=rand(1,10);
    $select = $_GET['select'];
    $result=$random*$select;
    echo $select."*".$random."="."?";
    echo "<br>";
    echo "<input type=\"number\" name=\"valeur\" value=\"\" >"; 
    echo"<br>";
    echo "<input name=\"Envoyer\" type=\"submit\"  onclick=\"test();>\">";
    
}
    ?> 
</form>
<?php
function test(){
  
    if(isset($_POST['valeur'])){
        //int pour convertir en nombre
    if((int)$_POST['valeur']===$result){

      echo"bravo!";
    }
   } 
}
?>


</p>
</div>
 <!-- Début footer -->
<div class="footer">
  <p>Formation ASC 2019- 2020</p>
</div>     
 <!-- Fin footer -->
</body>
</html>