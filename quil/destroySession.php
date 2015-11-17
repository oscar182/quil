<?php
session_start();
//session_unset();
session_destroy();

header('Location: logueate.php');
echo "La sesion esta cerrada";

?>