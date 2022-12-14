const Attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
const tileURL = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

const map = L.map('map', {
    center: [47.577331, 9.000088],
    zoom: 11,
    minZoom: 11,
    maxBounds: [
        //south west
        [47.314953, 8.536811],
        //north east
        [47.760957, 9.609610]]
});

//Karten Layer hinzufügen
L.tileLayer(tileURL, {Attribution}).addTo(map);

const kompostierungs_vergaerungsanlagen = L.tileLayer.wms('https://ows-raster.geo.tg.ch/geofy_access_proxy/biomasse?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'kompostierungs_vergaerungsanlagen',
    crs: L.CRS.EPSG4326
});


const kehricht = L.tileLayer.wms('https://ows-raster.geo.tg.ch/geofy_access_proxy/biomasse?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'kehricht',
    crs: L.CRS.EPSG4326
});

const gruenabfall = L.tileLayer.wms('https://ows-raster.geo.tg.ch/geofy_access_proxy/biomasse?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'gruenabfall',
    crs: L.CRS.EPSG4326
});
//layer waermenachfrage
const waermenachfrage = L.tileLayer.wms('https://ows-raster.geo.tg.ch/geofy_access_proxy/biomasse?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'waermenachfrage',
    crs: L.CRS.EPSG4326
});
const lebensmittelabfaelle = L.tileLayer.wms('https://ows-raster.geo.tg.ch/geofy_access_proxy/biomasse?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'lebensmittelabfaelle',
    crs: L.CRS.EPSG4326
});
const sammeltyp = L.tileLayer.wms('https://ows-raster.geo.tg.ch/geofy_access_proxy/biomasse?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'sammeltyp',
    crs: L.CRS.EPSG4326
});
const erntereste_zwischenfruechte = L.tileLayer.wms('https://ows-raster.geo.tg.ch/geofy_access_proxy/biomasse?', {
    version: '1.3.0',
    transparent: true,
    format: 'image/png',
    layers: 'erntereste_zwischenfruechte',
    crs: L.CRS.EPSG4326
});

//Unsere Layer
const layers = {
    "kompostierungs Vergaerungsanlagen": kompostierungs_vergaerungsanlagen,
    "Biogene Abfälle aus dem Kehricht (Biomasse)": kehricht,
    "Grünabfälle (Biomasse)": gruenabfall,
    "Wärmenachfrage": waermenachfrage,
    "Lebensmittelabfälle aus der Industrie": lebensmittelabfaelle,
    "Sammeltyp": sammeltyp,
    "Erntereste und Zwischenfrüchte": erntereste_zwischenfruechte
};

//Layer kontrolle
L.control.layers(layers).addTo(map);

//Map skalieren
L.control.scale({
    metric: true,
    imperial: false
}).addTo(map).addTo(map);

//Ausgewähltes Layer bekommen
var currentLayername;
//Legende hinzufügen
var legend1 = L.control({position: "topleft"});
const legend = L.control({position: 'bottomright'});
var title;
var background = [];
var section = [];
legend1.onAdd = function (map) {

    var div = L.DomUtil.create("div", "legend");
    div.innerHTML += '<h4>' + title + '</h4>';
    for (let i = 0; i < section.length; i++)
    {
        //for (let j = 0; j < background.length; j++) {
        div.innerHTML += '<i style="background:' + background[i] +'"></i><span>' + section[i] + '</span><br>';
        //}
    }section.splice(0, section.length);
    background.splice(0, background.length);
    return div;

};
map.on('baselayerchange', function (e) {
    currentLayername = e.name;
    legend.onAdd = function (map) {
        var div = L.DomUtil.create('div', 'Legend');
        if (currentLayername.valueOf() === "kompostierungs Vergaerungsanlagen") {
            div.innerHTML = '<img src="img/kompostierungs_vergaerungsanlagen.png">';
            title = "Vergärungsanlagen";
            section[0] = "klein";
            section[1] = "mittel";
            section[2] = "gross";
            background[0] = "#234F1E";
            background[1] = "#B80F0A";
            background[2] = "#FF1694";

        } else if (currentLayername.valueOf() === "Biogene Abfälle aus dem Kehricht (Biomasse)") {
            div.innerHTML = '<img src="img/kehricht.png">';
            title = "Biogene Abfälle";
            section[0] = "Positionen Biogene Abfälle";
            background[0] = "#B80F0A";
        } else if (currentLayername.valueOf() === "Grünabfälle (Biomasse)") {
            div.innerHTML = '<img src="img/gruenabfall.png">';
            title = "Grünabfälle";
            section[0] = "Positionen Grünabfälle";
            background[0] = "#37FD12";
        } else if (currentLayername.valueOf() === "Wärmenachfrage") {
            div.innerHTML = '<img src="img/waermenachfrage.png">';
            title = "Wärmenachfrage";
            section[0] = "wenig";
            section[1] = "mittel";
            section[2] = "gross";
            background[0] = "#1167B1";
            background[1] = "#FFF200";
            background[2] = "#B80F0A";
        } else if (currentLayername.valueOf() === "Lebensmittelabfälle aus der Industrie") {
            div.innerHTML = '<img src="img/lebensmittelabfaelle.png">';
            title = "Lebensmittelabfälle";
            section[0] = "Kreis, je grösser, desto mehr";
            background[0] = "#1167B1";
        } else if (currentLayername.valueOf() === "Sammeltyp") {
            div.innerHTML = '<img src="img/sammeltyp.png">';
            title = "Sammeltyp";
            section[0] = "wenig";
            section[1] = "mittel";
            section[2] = "viel";
            background[0] = "#234F1E";
            background[1] = "#FFF200";
            background[2] = "#B80F0A";
        } else if (currentLayername.valueOf() === "Erntereste und Zwischenfrüchte") {
            div.innerHTML = '<img src="img/erntereste_zwischenfruechte.png">';
            title = "Erntereste";
            section[0] = "Positionen";
            background[0] = "#1167B1";
        }
        return div;

    };
    legend.addTo(map);
    legend1.addTo(map);
});

