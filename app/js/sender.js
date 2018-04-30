function send() {
    var numberField = document.getElementById("nr");
    var number = numberField.value;

    if (numberField.checkValidity()) {


        setLoading();

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                setResponse(request.responseText);
            }
        };
        request.open("GET", "send.php?nr=" + number, true);
        request.send();

        ;

    } else {
        setError(numberField.validationMessage);
    }

    numberField.focus();
}

function setLoading() {
    var statusField = document.getElementById("response");
    setColor(statusField, "w3-blue");

    var statusText = document.getElementById("responseText");
    statusText.innerText = "Senden...";
}

function setResponse(response) {
    var statusField = document.getElementById("response");
    setColor(statusField, "w3-green");

    var statusText = document.getElementById("responseText");
    statusText.innerText = response;
}

function setError(errMsg) {
    var statusField = document.getElementById("response");
    setColor(statusField, "w3-red");

    var statusText = document.getElementById("responseText");
    statusText.innerText = errMsg;
}

function setColor(elem, color) {
    var allColors = ['w3-green', 'w3-blue', 'w3-red'];

    allColors.forEach(function (colorItem) {
        elem.classList.remove(colorItem);
    })

    elem.classList.add(color);
}