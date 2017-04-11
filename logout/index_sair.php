<?php

include('file:///C|/xampp/htdocs/loja/auth/controledeacesso.php');

session_destroy();
header("Location: /loja");

?>