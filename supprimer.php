<table class="table">
    <thead>
        <tr>
            <th>ID Salarié</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Sexe</th>
            <th>Service</th>
            <th>Date d'embauche</th>
            <th>Salaire</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $req = $bdd->query('SELECT * FROM employes');
        $employes = $req->fetchAll();

        foreach ($employes as $key => $value) {
            echo('<tr>');
                foreach ($value as $key2 => $value2) {
                    if (!is_numeric($key2)) {
                        echo('<td>'.$value2.'</td>');
                    }
                }
                echo('<td><a href="./script/supprimer.php?id='.$value['id_employes'].'">Supprimer</a></td>');
            echo('</tr>');
        }
    ?>
    </tbody>
</table>