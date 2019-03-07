

operar = function (func){
    numero = document.getElementById('numero').value;
    resultado = func(numero);
    document.getElementById("resultado").innerHTML = resultado;
}

btnPrimo = document.getElementById('primo');

btnPrimo.addEventListener("click", function(){
                          operar(esPrimo)
                          });

btnFibo = document.getElementById('fibo');

btnFibo.addEventListener("click", function(){
                          operar(fibonacci)
                          });
