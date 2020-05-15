<?php
    require("baseTop.php");
    require("baseBottom.php");
    top();

    $link = mysqli_connect("localhost", "jfraszczak", "Baza20", "jfraszczak");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
        
    echo
    "
    <table class='table table-hover'>
    <thead class='thead-dark'>
        <tr>
        <th scope='col'>Lp.</th>
        <th scope='col'>Imię i Nazwisko</th>
        <th scope='col'>Data od</th>
        <th scope='col'>Data do</th>
        <th scope='col'>Miejsce Wyjazdu</th>
        <th scope='col'>Miejsce Przyjazdu</th>
        </tr>
    </thead>
    <tbody>
    
    ";

    $result = mysqli_query($link, "SELECT * FROM delegacje;");

    while ($row = mysqli_fetch_assoc($result)){
        echo 
        
        "<tr>
        <th scope='row'>" . $row["Lp"] . "</td>
        <td>" . $row["Imie i Nazwisko"] . "</td>
        <td>" . $row["Data od"] . "</td>
        <td>" . $row["Data do"] . "</td>
        <td>" . $row["Miejsce Wyjazdu"] . "</td>
        <td>" . $row["Miejsce Przyjazdu"] . "</td></tr>";
    }

    echo "</tbody> </table>";

    bottom();
?>