<?php
    $user = 'root';
    $pass = 'root';
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=entreprise;port=8889', 'root', 'root');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>