<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Nr-Anzeige im Versammlungsraum</title>

    <link rel="stylesheet" href="css/w3.css">
    <script src="js/sender.js"></script>

</head>
<body>
<!-- Header Icon-->
<div class="w3-margin-right">
    <div class="w3-padding-small w3-right w3-margin-right w3-black">
        <img src="img/violinschluessel.png">
    </div>
</div>

<!-- Header-->
<div class="w3-bar">
    <div>
        <h6 class="w3-border-bottom w3-border-indigo w3-margin-right w3-right-align w3-text-brown">Mennoniten
            Brüdergemeinde
            Neuwied-Gladbach</h6>
    </div>
</div>

<!-- Content-->
<div class="w3-center">
    <h1 class="">
        Nummernanzeige im Versammlungsraum
    </h1>
    <div class="w3-margin-top">
        Singen wir noch das Lied unter der
    </div>
    <h4 class="w3-text-indigo">Nummer</h4>
    <div class="w3-gray w3-padding-small w3-border-left w3-border-top w3-border-indigo  w3-center">

        <div style="white-space: nowrap;">
            <form action="javascript:send();">
                <input id="nr" type="number" min="0"
                       style="width: 7em"
                       class="w3-xlarge w3-padding-24 w3-border-bottom w3-border-brown w3-border-0 w3-sand w3-text-indigo">
                <button type="submit" class="w3-round w3-center w3-button w3-btn w3-white ">
                    <img class="w3-padding-16" src="img/send.png">
                </button>
            </form>
        </div>
    </div>
</div>
<div class="w3-margin">
    <br>
</div>

<!-- Status bar as footer -->
<div id="response" class="w3-card-2 w3-green w3-text-white w3-bottom">
    <div id="responseText" class="w3-padding-small w3-margin-left">
        Bereit
    </div>
</div>

</body>
<?php
?>
</html>
