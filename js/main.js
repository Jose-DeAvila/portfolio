function mostrar(){
    let menu = document.getElementById('menu');
    menu.classList.toggle('active');
    changeIcon();
}

function scroll(){
    let menu = document.getElementById('navbar');
    let letras = document.getElementsByClassName('prueba');
    let scroll = document.documentElement.scrollTop || document.body.scrollTop;
    if(scroll>30){
        menu.style.backgroundColor="white";
        for(let i = 0; i<letras.length; i++){
            letras[i].classList.remove('no-scroll');
            letras[i].classList.add('scroll');
        }
    }else{
        menu.style.backgroundColor="transparent";
        for(let i = 0; i<letras.length; i++){
            letras[i].classList.remove('scroll');
            letras[i].classList.add('no-scroll');
        }
    }
}

function changeIcon(){
    const icon = document.getElementById('btn-menu');
    if(icon.innerHTML==="="){
        icon.innerHTML = "X";
    }else if(icon.innerHTML==="X"){
        icon.innerHTML = "=";
    }
}

const showWindowSuccess = async (e) => {
    e.preventDefault();
    e.target.reset();
    const btnEnviar = document.querySelector('.btnEnviar');
    btnEnviar.setAttribute('disabled', true);
    btnEnviar.innerText = "Enviando...";
    const formStatus = document.getElementById('my-form-status');
    const inputs = document.querySelectorAll('.uk-input');
    let data = {
        completeName: '',
        email: '',
        message: ''
    }
    
    inputs.forEach(input => {  
        if(input.name === "nombre"){
            data.completeName = input.value;
        }
        else if(input.name === "email"){
            data.email = input.value;
        }
        else if(input.name === "message"){
            data.message = input.value;
        }
    });

    (function(){
        emailjs.init("user_IEVJfpe97VCSXhQ83AP0M");
    })();

    const formResult = await emailjs.send("service_iyqsl2e", "template_mvpuxnr", data);
    if(formResult.status === 200){
        btnEnviar.innerText = "Enviar";
        btnEnviar.setAttribute('disabled', false);
        formStatus.innerText = "Mensaje enviado correctamente, nos pondremos en contacto con usted lo más pronto posible!";
    }
}

function HiddeWindowSuccess(){
    document.getElementById('alert-msg').classList.remove("show");
}