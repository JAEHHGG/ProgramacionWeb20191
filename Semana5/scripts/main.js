/*alert('Funciona');*/
console.log('Funciona x2');
document.getElementById('encabezado').innerHTML = 'Funciona x3';


//Ejemplo de operaciones con números
var numero = 10;
var otrNumero = 98;
var resultado = numero + otrNumero;

var elemento = document.getElementById('numeros');

var mensaje = 'la suma de ' + numero + ' + ';
mensaje += ' ' + otrNumero + ' es ' + resultado;

elemento.innerHTML = mensaje;

//Ejmplo de operaciones con caracteres
var caracter = 'j';
elemento = document.getElementById('caracteres');
mensaje = 'El tipo del caracter ' + caracter + ' es ';
mensaje += typeof (caracter);
elemento.innerHTML = mensaje;
