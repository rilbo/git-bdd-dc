<?php
    include_once './config/login.php';
?>

<?php 

   $req = "UPDATE employes SET salaire='".$_GET['salaire']."' WHERE id_employes=". $_GET['id'];
   $bdd->query($req);

   header('Location: /');

   

?>