//var footer = document.getElementsByTagName('footer');
//
//console.log(footer);
//
//var p = document.getElementsByTagName('p');
//
//console.log(p);
//
//var pie = document.getElementsByClassName('pie');
//
//console.log(pie);
//
//hijo_pie = footer[0].children;
//
//console.log(hijo_pie);
//
//padre_pie = footer[0].parentElement;
//
//console.log(padre_pie);
//
//hermano_pie = footer[0].previousSibling;
//
//console.log(hermano_pie);

var articulos = document.getElementsByTagName('article');

for (let i = 0; i < articulos.length; i++){
    elemento = articulos[i];
    elemento.innerHTML = 'hola ' + i;
}

var as = document.getElementsByTagName('a');

for (let i = 0; i < as.length; i++){
    as[i].setAttribute('class', 'sin-subrayar');
}
