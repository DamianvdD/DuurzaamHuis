// MAAK een nieuw request object aan
let xmlhttp = new XMLHttpRequest();

// STATUS bijhouden
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        // this.responseText is het teruggekomen JSON resultaat.
        let Stand = JSON.parse(this.responseText);

        displayResultaat(Stand);

    }
};

// OPEN en verstuur
xmlhttp.open("GET", "../standen2json.php", true);
xmlhttp.send();

// MAAK het resultaat op basis van de teruggezonden gegevens
function displayResultaat(Stand) {
    let tekst = '';

    for (let count = 0; count < Stand.length; count++) {
            tekst = tekst +
                'Verbruik op ' +
                Stand[count].Datum +
                ' voor ' +
                Stand[count].Item +
                ' = ' +
                Stand[count].Stand +
                '<br>';

            document.getElementById("Standen").innerHTML = tekst;
        }
}