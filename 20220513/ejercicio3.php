<?php
session_start();

$_SESSION["usuario"]="develoteca";
$_SESSION["estatus"]="logueando";

echo "Secion iniciada".":<br/>";

echo"usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["usuario"];


?>