<?php
    require("baseTop.php");
    require("baseBottom.php");
    top();
?>

    <table class="table table-hover">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Lp.</th>
        <th scope="col">Imię</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">Stanowisko</th>
        <th scope="col">Data zatrudnienia</th>
        <th scope="col">Ilość dni urlopowych</th>
        </tr>
    </thead>
    <tbody>
        <tr class="row_color">
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Zuckerberg</td>
        <td>Web Developer</td>
        <td>1 marzec 2017</td>
        <td>26</td>
        </tr>
        <tr class="row_color">
        <th scope="row">2</th>
        <td>Milos</td>
        <td>Raonic</td>
        <td>Dyrektor</td>
        <td>23 lipiec 1998</td>
        <td>31</td>
        </tr>
        <tr class="row_color">
        <th scope="row">3</th>
        <td>Mirosław</td>
        <td>Nowak</td>
        <td>Manager</td>
        <td>28 luty 2006</td>
        <td>18</td>
        </tr>
        <tr class="row_color">
        <th scope="row">4</th>
        <td>Marianna</td>
        <td>Kowalska</td>
        <td>Web Developer</td>
        <td>3 marzec 2020</td>
        <td>26</td>
        </tr>
        <tr class="row_color">
        <th scope="row">5</th>
        <td>Anna</td>
        <td>Rudzińska</td>
        <td>UX Specialist</td>
        <td>1 czerwiec 2012</td>
        <td>23</td>
        </tr>
        <tr class="row_color">
        <th scope="row">6</th>
        <td>Roger</td>
        <td>Federer</td>
        <td>Programista</td>
        <td>6 wrzesień 2018</td>
        <td>24</td>
        </tr>
    </tbody>
    </table>

    <br>

    <div class="row">
        <div class="col-sm-6">
            <div id="choose_colors">
                <div>
                    <p>Kolor wierszy nieparzystych:</p>
                    <form>
                    <input type="color" id="colorOdd" value="#ffffe6" onchange="setColor()">
                </div>

                <div>
                    <p>Kolor wierszy parzystych:</p>
                    <input type="color" id="colorEven" value="#ffccff" onchange="setColor()">
                </div>
            </div>
        </div>
    </div>


<?php
    bottom();
?>