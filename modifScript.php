<?php
    include_once './config/login.php';
?>

<p><?php echo $_GET['id'] ?></p>
<p><?php echo $_GET['salaire'] ?></p>
<?php 


   $req = "UPDATE employes SET salaire='".$_GET['salaire']."' WHERE id_employes=". $_GET['id'];
   $bdd->query($req);

   

?>