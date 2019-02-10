<?php
session_start();
// recuperation des données du formy
//http://127.0.0.1:4546/Api.php?url=https://webmail.unicaen.fr&width=800&nom=21710425863
if(key_exists('url',$_POST) && key_exists('weight',$_POST)  && key_exists('nom',$_POST)){
   $_SESSION['url'] = $_POST['url'];
   $_SESSION['weight'] = $_POST['weight'];
   $_SESSION['nom'] = $_POST['nom'];

   $url = $_SESSION["url"];
   $nom = $_SESSION["nom"];
   $width = $_SESSION["weight"];
  // print_r($whith);
   $navi='firefox';
  // print_r($navi);

   /* récupération de la commande d’exécution */
   // indication of the path of the jar file


//system($cmd);

  /*execution du jar avec paramètre*/
   // execution de l'application en jar en lui passant les parramettre

/*Fonction reponse */
//function response(){
	$response= exec($cmd);

//  $result = file_get_contents($response);
	//echo $result;
  $urlf = $response;

/*  function forceDownload($filename, $type = "application/octet-stream") {
    header('Content-Type: '.$type.'; charset=utf-8');
    header('Content-Disposition: attachment; filename="'.$filename.'"');
}*/

}


session_unset();

  ?>
