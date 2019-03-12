var imagen = document.getElementById('bull');

var cambio = function () {
    "use strict";
    if (imagen.getAttribute('class') === 'sapo') {
        imagen.setAttribute('class', 'sapo2');
    } else {
        imagen.setAttribute('class', 'sapo');
    }
}

document.getElementById('modImg').addEventListener('click', cambio);

document.getElementById('bull').addEventListener('mouseenter', cambio);

document.getElementById('bull').addEventListener('mouseout', cambio);
