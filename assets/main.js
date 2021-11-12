let cookie = document.cookie
            .split(';')
            .map(cookie => cookie.split("="))
            .reduce((accumulator, [key,value]) => 
                ({ ...accumulator, [key.trim()]: decodeURIComponent(value) }), {});


let defaultValue = cookie.language;
if (defaultValue === undefined) { defaultValue = "en";}

let page = window.location.pathname.split("/").pop().split(".")[0];
if (page == "") {page = "index";}
window.onload = () => loadJson(defaultValue);


function loadJson(language) {
    document.cookie = "language=" + language;
    fetch("lang/" + language + ".json")
    .then(response => response.json())
    .then(json => readJson(json))
};

function readJson(json) {
    for (let i in json["navbar"]) {
        document.querySelector('#'+i).innerHTML = json["navbar"][i];
    };

    for (let i in json[page]) {
        document.querySelector('#'+i).innerHTML = json[page][i];
    };
};

document.querySelector("#lang-fr").addEventListener("click", () => loadJson("fr"));
document.querySelector("#lang-en").addEventListener("click", () => loadJson("en"));
document.querySelector("#lang-it").addEventListener("click", () => loadJson("it"));

