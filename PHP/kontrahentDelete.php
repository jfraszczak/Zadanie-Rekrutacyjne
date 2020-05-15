<?php

    session_start();

    $link = mysqli_connect("localhost", "jfraszczak", "Baza20", "jfraszczak");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if(isSet($_POST["kontrahentDelete"])){
        $nip = $_POST['kontrahentDelete'];
        $sql = "UPDATE kontrahenci SET Usunieto = 1 WHERE NIP = '" . $nip . "'";

        mysqli_query($link, $sql);

        header("Location: kontrahenci.php");
    }







?>

