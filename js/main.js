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

function getURL(name,url){
    if(!url){
        url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if(!results) return null;
    if(!results[2]) return 'na';    
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
function showMessage(){
    let success = document.referrer.indexOf(window.location.host)
    console.log(success);
    if(success==-1){
        console.log("echo");
        let success_msg = document.getElementById('msg-success');
        success_msg.style.display="block";
        let contact = document.getElementById('msg-success').getBoundingClientRect().top+document.getElementById('msg-success').getBoundingClientRect().bottom;
        console.log(contact);
    }
}

function showWindowSuccess(){
    document.getElementById('alert-msg').classList.add("show");
    let check = document.querySelector('.check-icon');
    check.style.display = 'none';
    setTimeout(() => {
        check.style.display = 'block';
    }, 10);
}

function HiddeWindowSuccess(){
    document.getElementById('alert-msg').classList.remove("show");
}