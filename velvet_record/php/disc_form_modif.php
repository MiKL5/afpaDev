<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Modifier un vinyle</title>
</head>

<body>
    <div class="container">
        <h1>Modifier un vinyle</h1>
        <form action="">
            <fieldset>
                <label>Titre</label>
                <input type="text" class="form-control" id="NOM" placeholder="Entrer le titre"><br>
                <!-- <p>Artiste</p> -->
                <!-- La liste devra interroger une bdd -->
                <label for="exampleFormControlSelect1">Artiste</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select><br>
                <label>Année</label>
                <input type="text" class="form-control" id="Année" placeholder="Entrer l'année'"><br> <!-- si insactif readonly -->
                <label>Genre</label>
                <input type="text" class="form-control" id="Genre" placeholder="Entrer le genre"><br>
                <label>Label</label>
                <input type="text" class="form-control" id="Label" placeholder="Entrer le label (EMI, Warner, Polygram, Universal ...)"><br>
                <label>Prix</label>
                <input type="text" class="form-control" id="Prix" placeholder="Entrer le titre"><br>
                <label>Image</label><br>
                <input for="insertPicture" type="file" class="form-control-file" id="insertPicture"><br>
                <!-- aperçu de l'image -->
                <img src="..." alt="..." class="rounded float-left img-fluid img-thumbnail"><br><br>
                <div class="d-flex">
                <!-- les boutons ont une couleurs inhérente leur utilité -->
                <!-- bouton ajouter -->
                <button type="submit" class="btn btn-secondary btn-sm mx-1">Modifier</button>
                <!-- bouton retour -->
                <button type="return" class="btn btn-warning btn-sm mx-1">Retour</button>
                </div> <!-- End of div for button -->
            </fieldset>
        </form>
    </div> <!-- End of container -->

</body>

</html>