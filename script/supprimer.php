<?php
    if (!isset($_GET['id'])) {
        header('Location: /?erreur=true');
    } else {
        include_once '../config/login.php';

        $id = htmlspecialchars(strip_tags($_GET['id']));

        $bdd->query('DELETE FROM employes WHERE id_employes='.$id);

        header('Location: /?erreur=false');
    }
?>