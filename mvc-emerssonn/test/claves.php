<?php

$claveUsuario = "SENATI";

$claveMD5 = md5($claveUsuario);
$claveSHA = sha1($claveUsuario);
$claveHASH = password_hash($claveUsuario, PASSWORD_BCRYPT);


// clave acceso (login)
$claveAcceso = "SENATI";
//var_dump($claveHASH);



// validar clave hash
if (password_verify($claveAcceso, $claveHASH)){
    echo "Acceso correcto";
}