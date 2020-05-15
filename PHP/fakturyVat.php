<?php
    require("baseTop.php");
    require("baseBottom.php");
    top();
?>


<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Lp.</th>
        <th scope="col">Opis</th>
        <th scope="col">MPK</th>
        <th scope="col">Kwota Netto</th>
        <th scope="col">Ilość</th>
        <th scope="col">VAT</th>
        <th scope="col">Kwota Brutto</th>
        <th scope="col">Wartość Netto</th>
        <th scope="col">Wartość Brutto</th>
        </tr>
    </thead>
    <tbody>
        <tr class="row_vat">
        <th scope="row">1</th>
        <td>Opis1</td>
        <td>MPK1</td>
        <td class="kwota_netto">1000</td>
        <td class="ilosc">3</td>
        <td>
            <select class="vat form-control" onchange="updateVAT()">
                <option value="0">0%</option>
                <option value="3">3%</option>
                <option value="8">8%</option>
                <option value="23">23%</option>
            </select>
        </td>
        <td class="kwota_brutto"></td>
        <td class="wartosc_netto"></td>
        <td class="wartosc_brutto"></td>
        </tr>

        <tr class="row_vat">
        <th scope="row">2</th>
        <td>Opis2</td>
        <td>MPK2</td>
        <td class="kwota_netto">1600</td>
        <td class="ilosc">14</td>
        <td>
            <select class="vat form-control" onchange="updateVAT()">
                <option value="0">0%</option>
                <option value="3">3%</option>
                <option value="8">8%</option>
                <option value="23">23%</option>
            </select>
        </td>
        <td class="kwota_brutto"></td>
        <td class="wartosc_netto"></td>
        <td class="wartosc_brutto"></td>
        </tr>

        <tr class="row_vat">
        <th scope="row">3</th>
        <td>Opis3</td>
        <td>MPK3</td>
        <td class="kwota_netto">200</td>
        <td class="ilosc">1</td>
        <td>
            <select class="vat form-control" onchange="updateVAT()">
                <option value="0">0%</option>
                <option value="3">3%</option>
                <option value="8">8%</option>
                <option value="23">23%</option>
            </select>
        </td>
        <td class="kwota_brutto"></td>
        <td class="wartosc_netto"></td>
        <td class="wartosc_brutto"></td>
        </tr>

        <tr class="row_vat">
        <th scope="row">4</th>
        <td>Opis4</td>
        <td>MPK4</td>
        <td class="kwota_netto">1600</td>
        <td class="ilosc">5</td>
        <td>
            <select class="vat form-control" onchange="updateVAT()">
                <option value="0">0%</option>
                <option value="3">3%</option>
                <option value="8">8%</option>
                <option value="23">23%</option>
            </select>
        </td>
        <td class="kwota_brutto"></td>
        <td class="wartosc_netto"></td>
        <td class="wartosc_brutto"></td>
        </tr>

        <tr class="row_vat">
        <th scope="row">5</th>
        <td>Opis5</td>
        <td>MPK5</td>
        <td class="kwota_netto">1590</td>
        <td class="ilosc">11</td>
        <td>
            <select class="vat form-control" onchange="updateVAT()">
                <option value="0">0%</option>
                <option value="3">3%</option>
                <option value="8">8%</option>
                <option value="23">23%</option>
            </select>
        </td>
        <td class="kwota_brutto"></td>
        <td class="wartosc_netto"></td>
        <td class="wartosc_brutto"></td>
        </tr>
        
    </tbody>
    </table>

    <br>

    <button id="netto_button"  type="button" class="btn btn-dark">Kwota netto powyżej 1000zł</button>

<?php
    bottom();
?>
