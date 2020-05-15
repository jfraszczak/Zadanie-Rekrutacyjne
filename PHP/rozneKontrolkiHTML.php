<?php
    require("baseTop.php");
    require("baseBottom.php");
    top();
?>

        <div id="kontrolki_container" class="container">
            <h4>Dane kontrahenta</h4>

            <p>
                <form>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" id="nip">
                    </div>
                    <div class="form-group">
                        <label for="regon">REGON</label>
                        <input type="number" class="form-control" id="regon">
                    </div>
                    <div class="form-group">
                        <label for="nazwa">Nazwa</label>
                        <input type="text" class="form-control" id="nazwa">
                    </div>
                    <div class="form-group">
                        <label for="data">Data powstania</label>
                        <input type="date" class="form-control" id="data">
                    </div>
                    <div class="form-group">
                        <label for="ulica">Ulica</label>
                        <input type="text" class="form-control" id="ulica">
                    </div>
                    <div class="form-group">
                        <label for="nrdomu">Numer domu</label>
                        <input type="text" class="form-control" id="nrdomu">
                    </div>
                    <div class="form-group">
                        <label for="nrmieszkania">Numer mieszkania</label>
                        <input type="text" class="form-control" id="nrmieszkania">
                    </div>
                    <div class="form-group">
                        <label for="uwagi">Uwagi</label>
                        <textarea class="form-control" id="uwagi" rows="3"></textarea>
                    </div>
                </form>
            </p>

            <br>
            
            <p>
                <h4>Listy wyboru</h4>

                <form>

                    <div class="form-group">
                        <label for="kolory">Kolor:</label>
                        <select id="kolory" class="form-control">
                            <option value="green" class="green">zielony</option>
                            <option value="blue" class="blue">niebieski</option>
                            <option value="grey" class="grey">szary</option>
                            <option value="cyan" class="cyan">turkusowy</option>
                            <option value="navy" class="navy">granatowy</option>
                            <option value="red" class="red">czerwony</option>
                            <option value="white" class="white">biały</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="vat">Podatek VAT:</label>
                        <select id="vat" class="form-control">
                            <option value="zw">ZW</option>
                            <option value="np">NP.</option>
                            <option value="0">0%</option>
                            <option value="3">3%</option>
                            <option value="8">8%</option>
                            <option value="23">23%</option>
                        </select>
                    </div>

                </form>  
            </p>

            <br>
            
            <p>
                <h4>Lista html</h4>
                <ol id="kontrolki_list">
                    <li>Element</li>
                    <li>Element</li>
                    <li>Element</li>
                </ol>

            </p>

            <br>

    </div>


<?php
    bottom();
?>