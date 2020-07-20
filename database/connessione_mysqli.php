<?php


$connessione = mysqli_connect(HOST, USER, PASS, DB);

if (mysqli_connect_errno()){
    die("La connessione al db non è riuscita..." . mysqli_connect_error());
}


?>