<?php

include('../auth/controledeacesso.php');

session_destroy();
header("Location: /loja");

?>