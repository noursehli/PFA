<?php
$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;
$controleur_default = "Client" ;
if(!isset($_REQUEST['controller']))
$controller=$controleur_default;
else 
$controller = $_REQUEST['controller'];
switch ($controller) {
case "Administrateur" :
require("{$ROOT}{$DS}controller{$DS}controllerAdministrateur.php");
break;
case "Client" : 
require ("{$ROOT}{$DS}controller{$DS}controllerClient.php");
break;
case "ResponsableStock" : 
require ("{$ROOT}{$DS}controller{$DS}controllerResponsableStock.php");
break;
case "ProduitStock" : 
require ("{$ROOT}{$DS}controller{$DS}controllerProduitStock.php");
break;
case "ProduitTest" : 
require ("{$ROOT}{$DS}controller{$DS}controllerProduitTest.php");
break;
case "Commande" : 
require ("{$ROOT}{$DS}controller{$DS}controllerCommande.php");
break;
case "default" :
require ("{$ROOT}{$DS}controller{$DS}controllerClient.php");
break;
}
?>