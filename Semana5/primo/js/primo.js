/**
 * Determina si un numero es divisible entre otro
 *
 * @param   {int} dividendo [[El numero a dividir]]
 * @param   {int} divisor   [El divisor]
 * @returns {boolean} [True si es divisible, False de lo contrario]
 */
function esDivisible(dividendo, divisor) {
    return dividendo % divisor == 0;
}


function esPrimo(num) {
    let divisores = 0;

    for (let i = 1; i <= num; i++) {
        if (esDivisible(num, i)) {
            divisores++;
        }
    }

    return divisores === 2;
}

function fibonacci(num){
    if (num <= 2){
        return 1;
    }
    return fibonacci(num - 1) + fibonacci(num - 2);
}
