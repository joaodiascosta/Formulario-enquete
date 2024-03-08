var selector = document.getElementById('distrito');
var centro = document.getElementById('centro');
var leste = document.getElementById('leste');
var norte = document.getElementById('norte');
var oeste = document.getElementById('oeste');
var sul = document.getElementById('sul');

const outro = document.getElementById('checkbox7');
var inputOutro = document.getElementById('checkbox6');

const nomeCompleto = document.querySelector('#name');
const classErro = document.getElementById('nomeCompleto');
const erroNome = document.getElementById('erro-nome');
var erro = document.getElementById('erro');
var outroVazio = document.getElementById('erro-vazio');
var regiaoVazio = document.getElementById('erro-regiao');
var bairrovazio = document.getElementById('erro-bairro');

function verificarOutro() {
    if(inputOutro.checked) {
        outro.classList.remove('outro-text')
    } else {
        outro.classList.add('outro-text')
    }
}
inputOutro.addEventListener('click', verificarOutro);


const toggleModal = () => {
    const fade = document.querySelector('#fade');
    const modal = document.querySelector('#modal');
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
}


const scroll = document.getElementById('scroll')
function scrollToTop() {
    scroll.scrollIntoView({behavior:'smooth'});
}

function verificar(frm) {
    var erros = 0;
    
    if(nomeCompleto.value.length < 3) {
        erros++;
        erroNome.style.display = 'block';
        classErro.classList.toggle("-erro");
    } else {
        erroNome.style.display = 'none';
    }
    
    var checked = document.querySelectorAll(".checkbox:checked");
    if (checked.length == 0) {
        erros++;
        erro.style.display = 'block';
        scrollToTop();
        return false;
    } else if (checked.length >= 1) {
        erro.style.display = 'none'
    }
    
    if(inputOutro.checked && outro.value == '') {
        erros++;
        outroVazio.style.display = 'block';
        scrollToTop();
    }
    
    if(selector.value == '') {
        erros++;
        regiaoVazio.style.display = 'block';
    } else  {
        regiaoVazio.style.display = 'none';
    }
    
    if(selector.value == 'Zona Leste') {
        if(leste.value === '') {
            erros++;
            bairrovazio.style.display = 'block';
        } 
    } else if(selector.value == 'Centro') {
        if(centro.value === '') {
            erros++;
            bairrovazio.style.display = 'block';
        } 
    } else if(selector.value == 'Zona Oeste') {
        if(oeste.value === '') {
            erros++;
            bairrovazio.style.display = 'block';
        } 
    } else if(selector.value == 'Zona Sul') {
        if(sul.value === '') {
            erros++;
            bairrovazio.style.display = 'block';
        } 
    } else if(selector.value == 'Zona Norte') {
        if(norte.value === '') {
            erros++;
            bairrovazio.style.display = 'block';
        } 
    }
    
    if(erros>0) {
        return false;
    } else  {
        toggleModal();
    }

    submit();
}


//Não autorizar números no nome
nomeCompleto.addEventListener("keypress", function(e) {
    const keyCode = (e.keyCode ? e.keyCode : e.wich);
    
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault();
    }
});

// SELECT REGIOES
selector.addEventListener("change", () => {
    var valorSelect = selector.value;
    if (valorSelect == 'Centro') {
        centro.style.display = "block";
    } else {
        centro.style.display = "none";
    }
    
    if (valorSelect == 'Zona Leste') {
        leste.style.display = "block";
    } else {
        leste.style.display = "none";
    }
    
    if (valorSelect == 'Zona Norte') {
        norte.style.display = "block";
    } else {
        norte.style.display = "none";
    }
    
    if (valorSelect == 'Zona Oeste') {
        oeste.style.display = "block";
    } else {
        oeste.style.display = "none";
    }

    if (valorSelect == 'Zona Sul') {
        sul.style.display = "block";
    } else {
        sul.style.display = "none";
    }
});

const botaoEnviar = document.getElementById('button');
var nomeInput = document.getElementById('name');
var emailInput = document.getElementById('email');
const forma = document.getElementById('form');
var distrito = document.getElementById('distrito');

function verficacao() {
    var tamanhoNome = nomeInput.value.length;
    var tamanhoEmail = emailInput.value.length;
    var valueDistrito = distrito.value;
    var checked = document.querySelectorAll("input[type=checkbox]:checked").length;
    var checkedRadio = document.querySelectorAll("input[type=radio]:checked").length;

    if (tamanhoNome > 2 && tamanhoEmail > 2 && valueDistrito != "" && (centro.value != "" || norte.value != "" || sul.value != "" || leste.value != "" || oeste.value != "") && checked > 0 && (checkedRadio == 9)) {
        botaoEnviar.removeAttribute('disabled');
    }
}

var campos = document.getElementsByClassName("campos");

for (let i = 0; i < campos.length; i++) {
    campos[i].addEventListener('click', verficacao);
    campos[i].addEventListener('keypress', verficacao);
    campos[i].addEventListener('change', verficacao);
}



// var seila = 0;
// nomeInput.addEventListener('keypress', ()=> {
//     var nome = nomeInput.value;
//     if(nome.length > 1) {
//         seila++;
//     } 
// });

// IDB

// emailInput.addEventListener('keypress', ()=> {
//     botaoEnviar.removeAttribute('disabled');
// });

// sul.addEventListener('change', () => {
//     botaoEnviar.removeAttribute('disabled');
// });
    
// norte.addEventListener('change', () => {
//     botaoEnviar.removeAttribute('disabled');
// })

// leste.addEventListener('change', () => {
//     botaoEnviar.removeAttribute('disabled');
// })

// oeste.addEventListener('change', () => {
//     botaoEnviar.removeAttribute('disabled');
// })

// centro.addEventListener('change', () => {
//     botaoEnviar.removeAttribute('disabled');
// })

