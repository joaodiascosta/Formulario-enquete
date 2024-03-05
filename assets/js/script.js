
const outro = document.getElementById('checkbox7');
var inputOutro = document.getElementById('checkbox6');

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

const nomeCompleto = document.querySelector('#nome');
const botaoEnviar = document.getElementById('button');
const classErro = document.getElementById('nomeCompleto');
const erroNome = document.getElementById('erro-nome');
var erro = document.getElementById('erro');
var outroVazio = document.getElementById('erro-vazio');
var regiaoVazio = document.getElementById('erro-regiao');
var bairro = document.querySelectorAll('.bairro');
var bairrovazio = document.getElementById('erro-bairro');

function verificar(frm) {
    var erros = 0;
    
    if(nomeCompleto.value.length < 3) {
        erros++;
        erroNome.style.display = 'block';
        classErro.classList.toggle("-erro");
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

    if(selector.value == 'Selecione a região') {
        erros++;
        regiaoVazio.style.display = 'block';
    } 
    
    
    if(selector.value == 'Centro' || selector.value == 'Zona Norte' || selector.value == 'Zona Sul' || selector.value == 'Zona Oeste' || selector.value == 'Zona Leste') {
        if(centro.value == 'Selecione o bairro') {
            erros++;
            bairrovazio.style.display = 'block';
        } 
    }
    
    if(erros>0) {
        return false;
    } else  {
        toggleModal();
    }
    
    frm.submit();
}


//Não autorizar números no nome
nomeCompleto.addEventListener("keypress", function(e) {
    const keyCode = (e.keyCode ? e.keyCode : e.wich);
    
    if(keyCode > 47 && keyCode < 58) {
        e.preventDefault();
    }
});

// SELECT REGIOES
var selector = document.getElementById('distrito');
var centro = document.getElementById('centro');
var leste = document.getElementById('leste');
var norte = document.getElementById('norte');
var oeste = document.getElementById('oeste');
var sul = document.getElementById('sul');


selector.addEventListener("click", () => {
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
});
