<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/config/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $req = $bdd->query('SELECT * FROM employes');
        $req = $req->fetchAll();

        print_r($req);
    ?>
</body>
</html>