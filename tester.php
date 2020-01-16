<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css?<?php echo"". time() .""; ?>" />
        <title>Mon premier projet PHP</title>
        
    </head>

    <body>

        <header class="nav-menu">
            <label for="nav-toggle" class="nav-toggle-label"></label>
        </header>

        <div id="nav-toggle" class="nav-toggle"></div>				

        <ul id="menu-topo">
            <li><a href="index.php"><i class="icon-home"></i>Accueil</a></li>
            <li><a href="reviser.php">Réviser</a></li>
            <li><a href="tester.php">Tester</a></li>
        </ul>

        <div id="post-body">

            <h1><span>Tester </span>vos connaissances</h1><br>

            <form action="tester.php" method="get">

                <select name="select" id ="select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">

                    <?php	

                        if(isset($_GET['select'])) $matable = $_GET['select']; else $matable = "";

                        if (!$matable) echo"<option value=\"\">Selectionnez une table</option>";

                        for ($i=1;$i<=10;$i++)	
                        {
                            if ($i== $matable) echo '<option value="'.$i.'" selected>'.$i.'</option>';
                            else echo '<option value="tester.php?select='.$i.'">'.$i.'</option>';
                        }
                    ?>
                    
                </select>

            </form>

            <form action="" method="get" >

                <?php
            
                    if(isset($_GET['select'])) $select = $_GET['select']; else $select = "";
                    if(isset($_GET['random'])) $random = $_GET['random']; else $random = "";
                    if(isset($_GET['valeur'])) $valeur = $_GET['valeur']; else $valeur = "";

                    // Comparaison du résultat et de la bonne réponse
                    if($select && $random && $valeur)
                    {
                        $result =  $select * $random ;
                        //echo"La reponse : $random * $select = $result ( repondu $valeur )---<br><br>";
                        echo"La reponse : $select * $random = $result<br>";
                        if($result == $valeur) echo"<br>bravo!<br><br>"; else echo"perdu<br><br>";
                    }

                    if($select)
                    {
                        $random=rand(1,10);
                        $result=$random*$select;

                        echo $select."*".$random."="."?<br>";

                        echo "<input type=\"number\" name=\"valeur\" value=\"\" >";
                        echo "<input type=\"hidden\" name=\"select\" value=\"$matable\" >";
                        echo "<input type=\"hidden\" name=\"random\" value=\"$random\" >";
                        echo"<br><br><input name=\"Envoyer\" type=\"submit\" value=\"Confirmer\" >"; 
                    }
                    
                ?> 
            </form>

        </div>

        <footer> <!-- Début footer -->

            <p>Formation ASC 2019- 2020</p>

        </footer> <!-- Fin footer -->

    </body>

</html>