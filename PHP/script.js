function setColor() {
    var colorOdd = $("#colorOdd").val();
    var colorEven = $("#colorEven").val();
    var rows = $(".row_color");

    for(var i = 0; i < rows.length; i++){
        if(i % 2 == 0){
            $(rows[i]).css("background-color", colorOdd);
        }
        else{
            $(rows[i]).css("background-color", colorEven);
        }
    }
}

function extractFIleName(url){
    name = "";
    var i = url.length - 1;
    while(url[i] != "/" && i >= 0){
        name = url[i] + name;
        i -= 1;
    }
    return name;
}

function changeTab(){
    var file = extractFIleName($(location).attr('href'));
    $(".nav-link").removeClass("active");
    if(file == "rozneKontrolkiHTML.php"){
        $("#link1").addClass("active");
    }
    else if(file == "tabelaPracownikow.php"){
        $("#link2").addClass("active");
    }
    else if(file == "fakturyVat.php"){
        $("#link3").addClass("active");
    }
    else if(file == "delegacje.php"){
        $("#link4").addClass("active");
    }
    else if(file == "kontrahenci.php"){
        $("#link5").addClass("active");
    }
}

function updateVAT(){
    var rows = $(".row_vat");
    for(var i = 0; i < rows.length; i++){
        var vat = parseFloat($(rows[i]).find(".vat").val());
        var netto_price = parseFloat($(rows[i]).find(".kwota_netto").text());
        var quantity = parseFloat($(rows[i]).find(".ilosc").text());
        var netto_sum = (netto_price * quantity).toString();
        var brutto_price = (100.0 + vat) / 100.0 * netto_price;

        $(rows[i]).find(".wartosc_netto").html(netto_sum);
        $(rows[i]).find(".kwota_brutto").html(brutto_price);
        $(rows[i]).find(".wartosc_brutto").html(brutto_price * quantity);
    }
}


$('#netto_button').click(function(){
    var rows = $(".row_vat");
    for(var i = 0; i < rows.length; i++){
        var netto_price = parseFloat($(rows[i]).find(".kwota_netto").text());
        if(netto_price > 1000){
            $(rows[i]).css("background-color", "#80ffcc");
        }
    }
});

$('#my-search').keyup(function(){
  var table = $("#table_kontrahenci");
  var value = $("#my-search").val();

  var rows = $(table).find("tr");

  for(var i = 1; i < rows.length; i++){
    var nip = $($(rows[i]).find("td")[0]).text();
    if(nip.indexOf(value) > -1){
        $(rows[i]).css("display", "");
    }
    else{
        $(rows[i]).css("display", "none");
    }
  }
});


setColor();
changeTab();
updateVAT();
