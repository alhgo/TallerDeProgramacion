// JavaScript Document
//window.alert("HOLA MUNDO");
//Accedo al elemento del DOM con ID "tit" y lo meto en una variable
var DOM_title = document.getElementById("tit");
//Creo una variable que contendra el contenido de ese elemento
var contenido = DOM_title.innerHTML;
//Lo mando a consola
console.log(contenido);
//Ahora cambio el contenido de ese elemento
DOM_title.innerHTML = "Nuevo título desde Javascript";

//Ejemplo de código que pide un número al usuario y averigua si es par a partir de su modulo
var numeroRandom = prompt("Dame un número al azar"); //Pide un nº
//Comprobamos si tiene 0 decimales al dividir por 2
if(numeroRandom % 2 == 0){
        console.log("ES PAR");
}
else{
        console.log("Es impar")
}



//LISTENER
//Accedemos al elemento mediante su ID
var DOM_btn = document.getElementById("btn_img");
//En lugar de llamara una función, creamos una al vuelo
DOM_btn.addEventListener("click",function(){
                                console.log("Me han hecho click");
                                CambiarImagen();
                            });



//INTERRUPTOR Y DESENCADENADOR DE INTERACTIVIDAD 
//Booleana que indica que el interruptor esta encendido        
var enecendido = true;

//Funcion a la que llamo cada vez que hago click en la imagen        
function CambiarImagen()
{
    //Dependiendo de si está encendido o no la cambio
    if(enecendido == true){
        document.getElementById("koala").src = "img/koala2.jpg";
        AddStyle("koala","bordeNegro");
        RemoveStyle("koala","bordeRojo");
        enecendido = false; //Le digo que está apagado
    }
    else{
        document.getElementById("koala").src = "img/koala.jpg";
        AddStyle("koala","bordeRojo");
        RemoveStyle("koala","bordeNegro");
        enecendido = true;
    }

    //TRUCO: para cambiar una booleana por la contraria es con el siguiente codigo
    //enecendido = !enecendido;

    //Es bueno comprobar que funciona nuestro codigo con mensajes a consola
    console.log("Se ha cambiado la imagne. El estado del interruptor es: " + enecendido);

}

//Creamos un par de funciones que usaremos para poner o quitar estilos
function AddStyle(idElement, estilo)
{
    document.getElementById(idElement).classList.add(estilo);
}

function RemoveStyle(idElement, estilo)
{
    document.getElementById(idElement).classList.remove(estilo);
}
