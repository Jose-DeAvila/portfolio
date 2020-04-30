function mostrar(){
    let menu = document.getElementById('menu');
    menu.classList.toggle('active');
}

function scroll(){
    let menu = document.getElementById('navbar');
    let letras = document.getElementsByClassName('link');
    let scroll = document.documentElement.scrollTop || document.body.scrollTop;
    if(scroll>30){
        menu.style.backgroundColor="white";
        for(let i = 0; i<letras.length; i++){
            letras[i].style.color="black";
        }
    }else{
        menu.style.backgroundColor="transparent";
        for(let i = 0; i<letras.length; i++){
            letras[i].style.color="darkgray";
        }
    }
}