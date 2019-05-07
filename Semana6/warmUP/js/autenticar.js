let autenticar = function (numero) {

    if (numero >= 18) {
        return 'Bienvenido Adulto';
    }
    return "Estas muy joven para andar viendo packs";
}

btnAutenticar = document.getElementById('autenticar');


btnAutenticar.addEventListener('click', function(){
    let edad = document.getElementById('edad').value;
    document.getElementById('mensaje').innerHTML = autenticar(parseInt(edad));
});
