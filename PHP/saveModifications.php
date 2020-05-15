<?php

    session_start();

    $link = mysqli_connect("localhost", "jfraszczak", "Baza20", "jfraszczak");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if(isSet($_POST["saveModifications"])){
        $nip = $_POST['nip'];
        $regon = $_POST['regon'];
        $nazwa = $_POST['nazwa'];
        $platnik_vat = $_POST['platnikVat'];
        $ulica = $_POST['ulica'];
        $nr_domu = $_POST['nr_domu'];
        $nr_mieszkania = $_POST['nr_mieszkania']; 

        $sql = "UPDATE kontrahenci SET
                REGON = '$regon', 
                Nazwa = '$nazwa', 
                Ulica = '$ulica',
                Czy_platnik_vat = '$platnik_vat', 
                Numer_domu = '$nr_domu', 
                Numer_mieszkania = '$nr_mieszkania' 
                WHERE NIP = '$nip';";

        echo $sql;
        mysqli_query($link, $sql);

        header("Location: kontrahenci.php");
    }
?>