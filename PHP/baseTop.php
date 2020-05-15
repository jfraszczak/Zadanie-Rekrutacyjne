<?php
    function top(){
?>
    <?php session_start(); ?>
    <!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">

        <title>Zadanie zdalne e-MSI</title>
    </head>
    
    <body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Zadanie zdalne e-MSI</a>
    </nav>

        <div id="main_container" class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div id="Lewy">
                        <div id="main_links" class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a id="link1" class="nav-link active" href="rozneKontrolkiHTML.php">Różne kontrolki HTML</a>
                            <a id="link2" class="nav-link" href="tabelaPracownikow.php">Tabela Pracowników</a>
                            <a id="link3" class="nav-link" href="fakturyVat.php">Tabela Faktur VAT</a>
                            <a id="link4" class="nav-link" href="delegacje.php">Tabela Delegacji BD</a>
                            <a id="link5" class="nav-link" href="kontrahenci.php">Dane Kontrahentów</a>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-sm-9">
                    <div id="Prawy">

<?php } ?>