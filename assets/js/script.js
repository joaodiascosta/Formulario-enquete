
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

var bairro = document.querySelectorAll('.distrito');
console.log(bairro.value);
const nomeCompleto = document.querySelector('#nome');
const botaoEnviar = document.getElementById('button');
const classErro = document.getElementById('nomeCompleto');
const erroNome = document.getElementById('erro-nome');
var erro = document.getElementById('erro');
var outroVazio = document.getElementById('erro-vazio');

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

    if(inputOutro.checked && outro.value == '') {
        erros++;
        outroVazio.style.display = 'block';
        scrollToTop();
        // return false;
    }
    // if(bairro.value == undefined) {
    //     erros++;
    // }

    
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
var bairro = document.getElementsByName('bairro');

selector.addEventListener("click", () => {
    selector.addEventListener("change", () => {
        var valorSelect = selector.value;
        if (valorSelect == 'Centro') {
            centro.style.display = "block";
            botaoEnviar.removeAttribute('disabled');
        } else {
            centro.style.display = "none";
        }

        if (valorSelect == 'Zona Leste') {
            leste.style.display = "block";
            botaoEnviar.removeAttribute('disabled');

        } else {
            leste.style.display = "none";
        }

        if (valorSelect == 'Zona Norte') {
            norte.style.display = "block";
            botaoEnviar.removeAttribute('disabled');
        } else {
            norte.style.display = "none";
        }

        if (valorSelect == 'Zona Oeste') {
            oeste.style.display = "block";
            botaoEnviar.removeAttribute('disabled');

        } else {
            oeste.style.display = "none";
        }

        if (valorSelect == 'Zona Sul') {
            sul.style.display = "block";
            botaoEnviar.removeAttribute('disabled');
        } else {
            sul.style.display = "none";
        }
    });
});
