<?php
    require("baseTop.php");
    require("baseBottom.php");
    top();
?>

    <h4>Edycja danych kontrahenta</h4>
    <br>

    <form id="edit-form" method="post" action="saveModifications.php" onsubmit="return confirm('Czy na pewno chcesz dokonać edycji?')">
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" readonly value=<?php echo $_SESSION["NIP"] ?>>
            </div>
            <div class="form-group">
                <label for="regon">REGON</label>
                <input type="number" class="form-control" id="regon" name="regon"  value=<?php echo $_SESSION["REGON"] ?> >
            </div>
            <div class="form-group">
                <label for="nazwa">Nazwa</label>
                <input type="text" class="form-control" id="nazwa" name="nazwa" value=<?php echo $_SESSION["Nazwa"] ?>>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Czy podatnik VAT</label>
                <select class="form-control" id="platnikVat" name="platnikVat">
                <option value="Tak">Tak</option>
                <option value="Nie">Nie</option>
                </select>
             </div>
            <div class="form-group">
                <label for="ulica">Ulica</label>
                <input type="text" class="form-control" id="ulica" name="ulica" value=<?php echo $_SESSION["Ulica"] ?>>
            </div>
            <div class="form-group">
                <label for="nrdomu">Numer domu</label>
                <input type="text" class="form-control" id="nr_domu" name="nr_domu" value=<?php echo $_SESSION["Numer domu"] ?>>
            </div>
            <div class="form-group">
                <label for="nrmieszkania">Numer mieszkania</label>
                <input type="text" class="form-control" id="nr_mieszkania" name="nr_mieszkania" value=<?php echo $_SESSION["Numer mieszkania"] ?>>
            </div>

            <button type="submit" class="btn btn-dark" name="saveModifications">Dokonaj zmiany</button>
            <a href="kontrahenci.php"> <button type="button" class="btn btn-secondary">Powrót</button> </a>

        </form>

        <br><br>

<?php
    bottom();
?>