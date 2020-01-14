<!DOCTYPE html>
<html>
<body>
<?php 
session_start();
?>

<form action="trait.php" method="post">

<p>Sélectionner une table</p>	
<select name="select" id ="select" >
    <?php	
  
    $_POST['nbr']=$_SESSION['form']['nbr'];
    for ($i=1;$i<=10;$i++)	
        {
        if ($i==$_POST['nbr']) echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
        else echo '<option value="'.$i.'">'.$i.'</option>';
        }
      

    ?>
</select>
<input name="Envoyer" type="submit" >

</form>
<?php
if(isset($_POST['select'])){
    $select = $_POST['select'];
    echo $select;

}


?>

</body>
</html>