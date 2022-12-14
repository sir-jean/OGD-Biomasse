var montharray = new Array("Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember")
var serverdate = new Date(currenttime)

function padlength(what) {
    var output = (what.toString().length == 1) ? "0" + what : what
    return output
}

function displaytime() {
    serverdate.setSeconds(serverdate.getSeconds() + 1)
    var datestring = padlength(serverdate.getDate()) + "." + padlength(serverdate.getMonth() + 1) + "." + serverdate.getFullYear() + ","
    var timestring = padlength(serverdate.getHours()) + ":" + padlength(serverdate.getMinutes()) + ":" + padlength(serverdate.getSeconds())
    document.getElementById("servertime").innerHTML = datestring + " " + timestring
}

window.onload = function () {
    setInterval("displaytime()", 1000)
}