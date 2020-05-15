<?php

    session_start();

    $link = mysqli_connect("localhost", "jfraszczak", "Baza20", "jfraszczak");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if(isSet($_POST["kontrahentSave"])){
        $nip = $_POST['nip'];
        $regon = $_POST['regon'];
        $nazwa = $_POST['nazwa'];
        $platnik_vat = $_POST['platnikVat'];
        $ulica = $_POST['ulica'];
        $nr_domu = $_POST['nr_domu'];
        $nr_mieszkania = $_POST['nr_mieszkania']; 
        $sql = "INSERT INTO kontrahenci VALUES 
                ('$nip', '$regon', '$nazwa', '$platnik_vat', '$ulica', '$nr_domu', '$nr_mieszkania', 0);";
        mysqli_query($link, $sql);

        header("Location: kontrahenci.php");
    }
?>
