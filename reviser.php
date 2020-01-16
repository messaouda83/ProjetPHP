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

        <input type="checkbox" id="nav-toggle" class="nav-toggle">				

        <ul id="menu-topo">

            <li><a href="index.php">Accueil</a></li>
            <li><a href="reviser.php">Réviser</a></li>
            <li><a href="tester.php">Tester</a></li>

        </ul>

        <div id="post-body">

            <h1><span>Réviser</span> les tables de multiplications</h1><br>

            <form action="reviser.php" method="post">

                <?php

                    for($i=1; $i<=10; $i++){

                        if (isset($_POST['choix']) && in_array($i, $_POST['choix'])) $checked = "checked"; else $checked = ""; 

                        echo"<input type=\"checkbox\" name=\"choix[]\" value=\"$i\"  $checked >$i ";
                    }

                ?>

                <br><br><br>

                <input type="submit" value="Afficher tables de multiplications" >

            </form>
            
            <?php

                if (isset($_POST['choix'])) 
                {
                    foreach ($_POST['choix'] as $key => $value)
                    {
                        for($i=1; $i<=10; $i++)
                        {
                            $result = $value*$i;
                            echo'<br>';
                            
                            echo"$value*$i = $result<br>";
                            

                        }

                        echo"<br>";
                    } 
                }

            ?>

        </div>

        <footer> <!-- Début footer -->

            <p>Formation ASC 2019- 2020</p>

        </footer> <!-- Fin footer -->

    </body>

</html>