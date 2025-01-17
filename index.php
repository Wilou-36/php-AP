<?php

include('application.php');
$page = $_GET['page']; /*prend toute les variables qui passe par le lien*/


if(isset($_GET['page']))
{
    $page = $_GET['page']; 
}
else




$monapp = new AppMVC();

$monapp -> afficherPage($page );

?>