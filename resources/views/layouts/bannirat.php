<?php 
    session_start();
    $bdd = new PDO("mysql:host=localhost;dbname=test-technique;charset=utf8", "root", "");
    // utilisateur
    if(isset($_GET['id_user']) AND !empty($_GET['id_user'])){
        $getid = $_GET['id_user'];
        $recupuser= $bdd->prepare('SELECT * FROM relation WHERE id_user =?');
        $recupuser->execute(array($getid));
        if($recupuser->rowCount() > 0) {

            $banniruser = $bdd->prepare('DELETE FROM relation WHERE id_user =?');
            $banniruser->execute(array($getid));
            header('Location: index.php');

        }else {echo "aucun membre na ete trouver";}
    }else{echo "aucun id en paramètre";}


   