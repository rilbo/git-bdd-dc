<?php
  include_once './config/login.php';
  $id_employes = $_POST['id_employes'] ?? null;
  $prenom = $_POST['prenom'] ?? null;
  $nom = $_POST['nom'] ?? null;
  $genre = $_POST['genre'] ?? null;
  $service = $_POST['service'] ?? null;
  $date_embauche = $_POST['date_embauche'] ?? null;
  $salaire = $_POST['salaire'] ?? null;
  // Je vérifie que l'utilisateur a cliqué sur le submit
  $insert = "INSERT INTO `employes`(`id_employes`, `prenom`, `nom`, `sexe`, `service`, `date_embauche`, `salaire`) VALUES ($id_employes,'$prenom','$nom','$genre','$service','$date_embauche',$salaire)";
  // méthode sur la préparation : sécurisé
  echo($insert);
  $bdd->query($insert);

  // if (isset($_POST['send']) && $_POST['send'] == 'Envoyer') {
  //   extract($_POST);
  //   // transmission des données en BDD:
  //   $insert = "INSERT INTO `employes`(`id_employes`, `prenom`, `nom`, `genre`, `service`, `date_embauche`, `salaire`) VALUES (:id_employes,:prenom,:nom,:genre,:service,:date_embauche,:salaire)";
  //   // méthode sur la préparation : sécurisé
  //   $reqPdoStatement = $bdd->prepare($insert);

  //   //execution de la méthode préparée:
  //   $reqPdoStatement->execute([
  //     'id_employes' => $id,
  //     'prenom' => $prenom,
  //     'nom' => $nom,
  //     'genre' => $genre,
  //     'service' => $service,
  //     'date_embauche' => $date_embauche,
  //     'salaire' => $salaire,
  //   ]);

  //   // header('location:./?creer=true');
  //   exit();
  // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add</title>
</head>
<body>
  <pre><?php var_dump($_POST)  ?></pre>
  <form method="post" class="m-4">
    <div class="mb-3">
      <label for="id_employes" class="form-label">ID</label>
      <input minlength="1" type="number" class="form-control" id="id_employes" name="id_employes">
    </div>
    <div class="mb-3">
      <label for="prenom" class="form-label">Prénom</label>
      <input minlength="2" type="text" class="form-control" id="prenom" name="prenom" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input minlength="2" type="text" class="form-control" id="nom" name="nom">
    </div>
    <div class="mb-3">
      <label for="genre" class="form-label">Genre</label>
      <select name="genre" id="genre" class="form-select">
        <option value="m">Homme</option>
        <option value="f">Femme</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="service" class="form-label">Service</label>
      <input minlength="2" type="text" class="form-control" id="service" name="service">
    </div>
    <div class="mb-3">
      <label for="date" class="form-label">Date d'embauche</label>
      <input type="date" class="form-control" id="date" name="date_embauche">
    </div>
    <div class="mb-3">
      <label for="salaire" class="form-label">Salaire</label>
      <input minlength="1" type="number" class="form-control" id="salaire" name="salaire">
    </div>
    <button type="submit" value="Envoyer" class="btn btn-primary" name="send">Ajouter</button>
  </form>
</body>
</html>