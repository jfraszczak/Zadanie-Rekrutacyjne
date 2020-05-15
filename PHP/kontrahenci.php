<?php
    require("baseTop.php");
    require("baseBottom.php");
    require("modalAdd.php");
    top();

    $link = mysqli_connect("localhost", "jfraszczak", "Baza20", "jfraszczak");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
        
    echo
    "	
    	<div class='row'>
    		<div class='col-sm-5' id='search-col'>
            	<input id='my-search' class='form-control mr-sm-2' type='search' placeholder='Szukaj po numerze NIP' aria-label='Search'>
            	<button id='search-button' type='button' class='btn btn-dark'>Szukaj</button>
            </div>
        </div>


    <br>

    <table id='table_kontrahenci' class='table table-hover'>
    <thead class='thead-dark'>
        <tr>
        <th scope='col'>NIP</th>
        <th scope='col'>REGON</th>
        <th scope='col'>Nazwa</th>
        <th scope='col'>Czy płatnik VAT</th>
        <th scope='col'>Ulica</th>
        <th scope='col'>Numer domu</th>
        <th scope='col'>Numer mieszkania</th>
        <th scope='col'></th>
        <th scope='col'></th>
        </tr>
    </thead>
    <tbody>
    
    ";

    $result = mysqli_query($link, "SELECT * FROM kontrahenci WHERE Usunieto = 0;");

    while ($row = mysqli_fetch_assoc($result)){
        echo 
        
        "<tr>
        <td>" . $row["NIP"] . "</td>
        <td>" . $row["REGON"] . "</td>
        <td>" . $row["Nazwa"] . "</td>
        <td>" . $row["Czy_platnik_vat"] . "</td>
        <td>" . $row["Ulica"] . "</td>
        <td>" . $row["Numer_domu"] . "</td>
        <td>" . $row["Numer_mieszkania"] . "</td>
        <td>
            <form method='post' action='kontrahentEdit.php'>
                <button type='submit' class='btn btn-info' name='kontrahentEdit' value=" . $row["NIP"] . ">Edytuj</button>
            </form>
        </td>
        <td>
            <form method='post' action='kontrahentDelete.php' onsubmit=\"return confirm('Czy na pewno chcesz usunąć kontrahenta?')\">
                <button type='submit' class='btn btn-danger' name='kontrahentDelete' value=" . $row["NIP"] . ">Usuń</button>
            </form>
        </td></tr>";
    }
    echo "</tbody> </table>";

    echo 
    "
    <br>
    <button type='button' class='btn btn-dark' data-toggle='modal' data-target='#modalAdd'>
        Dodaj
    </button>
    ";

    bottom();
?>