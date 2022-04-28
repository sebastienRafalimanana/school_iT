<?php
header('Access-Control-Allow-Origin:*');
/**
 * pour les rendu des templates
 * url : http://localhost/G-School/public/index.php?p='xxxx'"
 */

if ($Get_Template == true) {
   if (isset($_GET['p'])) {
      $p = $_GET['p'];
      $render->render($p);
   }else{
      $p = "dash";
      $render->render($p);
   }
}


/**
 *fonction qui retourne les pages du lien href
 */
function url($page){
   $base = "http://localhost/G-School/public/index.php?p=".$page;
   return $base;
}


 
/**
 * pour les endpoint a part post
 * url : http://localhost/G-School/api?query="xxxx"&endpoint="yyyy"
 */

/* if (isset($_GET['query']) && isset($_GET['endpoint'])) {
      $query = $_GET['query'];
      $endpoint = $_GET['endpoint'];
      $api->getApi($query,$endpoint);   

} */



?>
