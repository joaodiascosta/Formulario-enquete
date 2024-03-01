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

const nomeCompleto = document.querySelector('#nome');
const botaoEnviar = document.getElementById('button');
const classErro = document.getElementById('nomeCompleto');
const erroNome = document.getElementById('erro-nome');
var erro = document.getElementById('erro');

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
    } 
    
    var checked = document.querySelectorAll(".checkbox:checked");
    if (checked.length == 0) {
        erros++;
        erro.style.display = 'block';
        scrollToTop();
        return false;
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
        if (valorSelect == 'centro') {
            centro.style.display = "block";
        } else {
            centro.style.display = "none";
        }

        if (valorSelect == 'leste') {
            leste.style.display = "block";
        } else {
            leste.style.display = "none";
        }

        if (valorSelect == 'norte') {
            norte.style.display = "block";
        } else {
            norte.style.display = "none";
        }

        if (valorSelect == 'oeste') {
            oeste.style.display = "block";
        } else {
            oeste.style.display = "none";
        }

        if (valorSelect == 'sul') {
            sul.style.display = "block";
        } else {
            sul.style.display = "none";
        }
    });
});
