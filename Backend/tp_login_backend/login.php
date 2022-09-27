<?php 
    $user=$_POST ["user"];
    $pass=$_POST ["pass"];

    $nombre="Meguki";
    $contrasenia="backend";

    if ($user==$nombre & $pass==$contrasenia){
        header ("location:https://github.com/Meguki/SucciniIgnacioIvo_Potrero");
    }
    else{
        header ("location:error.html");
    }
?>