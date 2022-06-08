<!DOCTYPE html>
<html lang="fr">

<?php
    include 'header.php';
    include 'db.php';
    // INSCRIPTION
    // $connexion = ConnexionBase();
    // $req = $connexion->prepare("select * from record where id = :id and name = :name");
    // $req->bindValue(':id', $id);
    // $req->bindValue(':name', $name);
    // $req->execute();

    // $result = $req->fetch(PDO::FETCH_ASSOC);

    // print_r($result);

    // // initialisation des variables
    // $identifier = '';
    // $passwd = '';
    // $msg = '';
    // // Vérification que l'identification est correcte
    // function userexist($identifier, $passwd)
    // {
    //     return (bool) rand(0, 1);
    // }
    // // traitement du formulaire
    // if (isset($_POST['connection'])) {
    //     // récup des saisies
    //     $identifier = $_POST['identifier'];
    //     $passwd = $_POST['password'];
    //     // Vérif userexist
    //     if (userexist($identifier, $passwd)) {
    //         header('location:disc.php'); // envoi un entête brut
    //         exit; // affiche un msg et termine le script
    //     } else {
    //         $msg = 'Identifiant incorrect ou inexistant.';
    //         $msg = 'Essayer à nouveau.';
    //         // le formulaire se réaffichera
    //     }
    // }
?>

<body>
    <!--  pour remonter faire ../  -->
    <!-- PDO -> PHP Data Object -->

<div class="mt-5">
    <!-- <p>Un câble mini-jack écrira re, passera devant le casque qui est le c,<br>puis derrière le vinyle pour ressortir par le trou <br> et écrire rd, la prise est donc la barre du d.</p><br> -->
    <div class="d-flex">
        <!-- record ecrit avec unb fil jack le c est un casque et le o un vinyle le fil pas derrière le casque et ressot par le trou du vinyle pour donner une impressionde relief -->
        <!-- <img src="img/logo/casque.png" alt="casque" title="casque" class="rounded mx-auto d-block mb-8"> -->
        <img src="img/logo/vinyle.png" alt="disque" title="disque" class="rounded mx-auto d-block mb-8">
        <br><br><br><br>
    </div><!-- End of div logo -->


    <form action="index.php" method="$_POST">
        <div class="container d-flex">
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon3">Identifiant</span>
                <input type="text" class="form-control" id="basic-url" placeholder="<?= $identifier ?>" aria-describedby="basic-addon3">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon3">Mot de passe</span>
                <input type="text" class="form-control" id="basic-url" placeholder="<?= $passwd ?>" aria-describedby="basic-addon3">
            </div>
            <p class="text-danger"><?= $msg ?></p>
            
        </div> <!-- End of container -->
    </form>

    <!-- 2 boutons -->
    <div class="text-center">
        <a href="disc.php"><button type="submit" class="btn btn-outline-primary btn-lg mx-5 mb-5">S'inscrire</button></a>
        <a href="disc.php"><button type="submit" class="btn btn-primary btn-lg mx-5 mb-5">Se connecter</button></a>
    </div> <!-- End of div button -->
</div> <!-- End of container -->

<?php
    include 'footer.php';
?>