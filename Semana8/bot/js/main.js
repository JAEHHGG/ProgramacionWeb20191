var preguntas = {
    hola: 'hola como estas?',
    'hola que ase': 'no soy una llama',
    '¿quieres ser mi novia?': 'jajaja... NO'
}

var btn_enviar = document.getElementById('enviar');

var esperando = false;

var pregunta = '';

function enviar() {
    let texto = document.getElementById('usser-input').value;
    let pantalla = document.getElementById('pantalla');
    pantalla.innerHTML += '<p><b>El usuario dijo: </b> ' + texto + '</p>';
    if (esperando) {
        preguntas[pregunta] = texto;
        esperando = false;
        pantalla.innerHTML += '<p><b>El bot dice: </b>  a ya entiendo</p>';
    } else {
        if (texto in preguntas) {
            pantalla.innerHTML += '<p><b>El Bot dice: </b> ' + preguntas[texto] + '</p>';
        } else {
            pantalla.innerHTML += '<p><b>El bot dice: </b>  no se enseñame</p>';
            pregunta = texto;
            esperando = true;
        }
    }


}

btn_enviar.addEventListener('click', enviar);
