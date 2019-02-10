<?php
session_start();
// fonction détruire une variable
function foo()
{
    unset($GLOBALS['ok']);
}

$erreur="okok";
/*Test si les champs récupérés sont vides ou pas*/
if(key_exists('url',$_GET) && key_exists('width',$_GET) && key_exists('nom',$_GET)){
   $_SESSION['url'] = htmlentities($_GET['url']);
   $_SESSION['width'] = htmlentities($_GET['width']);
   $_SESSION['nom'] = htmlentities($_GET['nom']);
   $url = $_SESSION['url'];
   $nom = $_SESSION['nom'];
   $width = $_SESSION["width"];

   $navi='firefox';
   $navi1='chrome';
   //remplire


  //verficion du format du chammp url
   if (filter_var($url, FILTER_VALIDATE_URL)) {
        // récupération de la commande d’exécution
        // indication of the path of the jar file
        $cmd = 'java -jar ./webshot-java-master/build/WebShot.jar --url ' . $url . ' --driver ' . $navi . ' --width ' . $width .' --filename '.$nom;

        //exécution de la commande a l'aide de exec
        //exec Exécute une commande via le Shell et retourne le résultat sous forme de chaîne
        $response=exec($cmd);

              $urlf = $response;
              // Réponse retournée à l'utilisateur avec le format de telechargement
              if(file_exists($urlf))
              {
                  header('Content-type: application/JPEG');
                  header('Content-Disposition: attachment;filename="'.$nom.'.JPEG"');
                  readfile($urlf);
              }

    }

  else {
      echo("$url is not a valid URL");
    }
     foo($erreur);

}
else{
  $erreur =" Erreur, Invalid Request";
}
echo $erreur;

session_unset();

  ?>
