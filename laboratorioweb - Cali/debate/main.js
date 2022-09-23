var config = {
    apiKey: "AIzaSyAV1J4HMemLRvmHhM30hMhltXqFP8Wbk14",
    authDomain: "estructuradatos-99b81.firebaseapp.com",
    databaseURL: "https://estructuradatos-99b81-default-rtdb.firebaseio.com",
};

firebase.initializeApp(config);
var db = firebase.database();

// CREAR ALERTA

var formularioAlerta = document.getElementById('formularioAlerta');
var nombreCompleto   = document.getElementById('nombreCompleto');
var mensaje    = document.getElementById('mensaje');
var ciudad    = document.getElementById('ciudad');
var idOculto   = document.getElementById('idOculto');

formularioAlerta.addEventListener('submit', (e) => {
    e.preventDefault();

if (!nombreCompleto.value || !mensaje.value || !ciudad.value) return null

var id = idOculto.value || Date.now()

db.ref('opiniones/' + id).set({
    nombreCompleto: nombreCompleto.value,
    mensaje: mensaje.value,
    ciudad: ciudad.value
});

nombreCompleto.value = '';
mensaje.value = '';
ciudad.value = '';
idOculto.value = '';
});

// CONSULTAR ALERTA/ alert

var alertas = document.getElementById('opiniones');
var alertasRef = db.ref('/opiniones');

alertasRef.on('child_added', (data) => {
    var li = document.createElement('li')
    li.id = data.key;
li.innerHTML = alertaTemplate(data.val())
alertas.appendChild(li);
});

alertasRef.on('child_changed', (data) => {
    var nodoAlerta = document.getElementById(data.key);
nodoAlerta.innerHTML = alertaTemplate(data.val());
});

alertasRef.on('child_removed', (data) => {
    var nodoAlerta = document.getElementById(data.key);
nodoAlerta.parentNode.removeChild(nodoAlerta);
});

alertas.addEventListener('click', (e) => {
    var nodoAlerta = e.target.parentNode

    // ACTUALIZAR ALERTA
    if (e.target.classList.contains('edit')) {
    nombreCompleto.value = nodoAlerta.querySelector('.nombreCompleto').innerText;
    mensaje.value  = nodoAlerta.querySelector('.mensaje').innerText;
    ciudad.value  = nodoAlerta.querySelector('.ciudad').innerText;
    idOculto.value = nodoAlerta.id;
}

// ELIMINAR ALERTA
if (e.target.classList.contains('delete')) {
    var id = nodoAlerta.id;
    db.ref('opiniones/' + id).remove();
}
});

function alertaTemplate({nombreCompleto, mensaje, ciudad}) {
    return `
    <div class='nombreCompleto'>${nombreCompleto}</div>
    <div class='mensaje'>${mensaje}</div>
    <div class='ciudad'>${ciudad}</div>
    <button class='delete'>Eliminar</button>
   
  `
};
