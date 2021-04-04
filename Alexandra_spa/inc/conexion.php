<?php

try {
    $bd = new mysqli('localhost', 'root', '', 'alexandra' );
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}

/* if($bd->ping() ) {
    echo 'Todo bien';
} else {
    echo $bd->connect_error;
} */