<?php

    session_start();

    $link = mysqli_connect("localhost", "jfraszczak", "Baza20", "jfraszczak");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if(isSet($_POST["kontrahentEdit"])){
        $nip = $_POST["kontrahentEdit"];

        $_SESSION['NIP'] = $nip;

        $result = mysqli_query($link, "SELECT * FROM kontrahenci WHERE NIP = '" . $nip . "'");

        while ($row = mysqli_fetch_assoc($result)){
            $_SESSION['REGON'] = $row['REGON'];
            $_SESSION['Nazwa'] = $row['Nazwa'];
            $_SESSION['Ulica'] = $row['Ulica'];
            $_SESSION['Numer domu'] = $row['Numer_domu'];
            $_SESSION['Numer mieszkania'] = $row['Numer_mieszkania'];
        }

        header("Location: kontrahentEditForm.php");
    }







?>

