//ocultar la seccion del menu de la pagina actual

let pagina = 1;

document.addEventListener('DOMContentLoaded', function(){
        iniciarPagina();
});

function iniciarPagina(){
        ocultarSeccion();
}

function ocultarSeccion(){
        const pagina = document.querySelector('.pagina').dataset.pagina;
        const enlace = document.querySelector(`#secc-${pagina}`);

        switch (pagina) {
                case "1":
                        enlace.classList.add('ocultar');
                        break;
                case "2":
                        enlace.classList.add('ocultar');
                        break;
                case "3":
                        enlace.classList.add('ocultar');
                        break;
                case "4":
                        enlace.classList.add('ocultar');
                        break;
                case "5":
                        enlace.classList.add('ocultar');
                        document.querySelector('.grid2').classList.add('ocultar');
                        document.querySelector('.barra-contactos').classList.add('ocultar');
                        break;
        
                default:
                        break;
        }

        
        };



/*menu checked*/
let menu = document.getElementById('navegacion');
let botonMenu = document.getElementById('botonMenu');


botonMenu.addEventListener('click', function() {
        if(botonMenu.checked) {
                menu.classList.add('mostrar');
                menu.classList.remove('ocultar');
                
                } else {
                        menu.classList.add('ocultar');
                        menu.classList.remove('mostrar');
                }
        });

        //animacion para contador pagina paneles

        let valueDisplay = document.querySelectorAll(".tarjeta-numero");
        let intervaloContador = 5000;
        
        valueDisplay.forEach(valueDisplay => {
                let startValue = 0;
                let endValue = parseInt(valueDisplay.getAttribute("data-val"));
                let duracion = Math.floor(intervaloContador / endValue);
                let contador = setInterval(function (){
                        startValue += 1;
                        valueDisplay.textContent = startValue;
                        if(startValue == endValue) {
                                clearInterval(contador);
                        }
                }, duracion);
        
        });

/*Animación carrussel*/


let slider = document.querySelector(".carrusel-slide");
let sliderIndividual = document.querySelectorAll(".carrusel-slide-item");
let sliderIndividualLast = sliderIndividual[sliderIndividual.length -1];

const botonIzq = document.querySelector("#boton-izq");
const botonDer = document.querySelector("#boton-der");


slider.insertAdjacentElement('afterbegin', sliderIndividualLast);

function movDer() {
        let sliderIndividualFirst = document.querySelectorAll(".carrusel-slide-item") [0];
        
        if (slider === null) {
                return 0;
        }
        slider.style.marginLeft = "-29rem";
        slider.style.transition = "all 0.5s";
        setTimeout(function(){
                slider.style.transition = "none";
                slider.insertAdjacentElement('beforeend', sliderIndividualFirst);
                slider.style.marginLeft = "0";
        },500);
}

botonDer.addEventListener('click', function(){
        movDer();
} );

function movIzq() {
        let sliderIndividual = document.querySelectorAll(".carrusel-slide-item");
        let sliderIndividualLast = sliderIndividual[sliderIndividual.length -1];
        slider.style.marginLeft = "29rem";
        slider.style.transition = "all 0.5s";
        setTimeout(function(){
                slider.style.transition = "none";
                slider.insertAdjacentElement('afterbegin', sliderIndividualLast);
                slider.style.marginLeft = "0";
        },500);
}

botonIzq.addEventListener('click', function(){
        movIzq();
} );


setInterval(function(){
        movDer();
}, 5000);


//Animación aparecer con scroll seccion detalles


let detalles = document.querySelectorAll(".detalles-div");


function mostrarScroll() {
        let scrollTop = document.documentElement.scrollTop;

        for (var i=0; i < detalles.length; i++) {
                let alturaDetalles = detalles[i].offsetTop;
                if(alturaDetalles - 600 < scrollTop) {
                        detalles[i].style.opacity = 1;
                }
        }
}






window.addEventListener('scroll', mostrarScroll);




