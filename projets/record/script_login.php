<?php
// Si le login et le mot de passe sont corrects (pour exemple login='admin' et mot de passe='admin') alors nous initialisons une variable de session auth avec la valeur ok.
// Sinon la variable de session auth est détruite.


// Une autre page PHP devra être accessible uniquement si une session a été initialisée, c'est-à-dire si l'utilisateur s'est authentifié correctement (donc i la variable de session auth existe et contient la valeur ok). Si ce n'est pas le cas, l'utilisateur devra être redirigé sur la page de connexion.
    // Identifiant de session
    session_start();
    $_SESSION["login"] = "";
    $_SESSION["role"] = "admin";
    echo"- session ID : ".session_id();

    // Test de la session
    session_start();
    if ($_SESSION["login"]) 
    {
        header("Location:index.php");
        exit;
    } 
    else 
    {
        header("login_form.php");
        echo"Cette page nécessite une identification.";
        exit;
    }

    // Mot de passe



?>