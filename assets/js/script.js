const form = document.querySelector('#form');
const nomeCompleto = document.querySelector('#nome');
const emailInput = document.querySelector('#email');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    if(nomeCompleto.value === '') {
        alert("Por favor, preencha o seu nome");
    } else if(nomeCompleto.value.length < 3) {
        alert("Nome deve conter ao menos 3 caracteres");
    } 

    if(emailInput.value === "" || !isEmailValid(emailInput.value)) {
        alert("Por favor, preencha o seu email");
        return;
    }

    form.submit();
});

// validar email
function isEmailValid(email) {
    const emailRegex = new RegExp (
        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/
    );

    if(emailRegex.test(email)) {
        return true;
    }

    return false;
}

// Não autorizar números no nome
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


// MENSAGEM DE ERRO NA TELA - CHECKBOX E SCROLL PARA  A MESMA
var erro = document.getElementById('erro');
function verificar () {
    var checked = document.querySelectorAll(".checkbox:checked");
    if (checked.length == 0) {
        erro.style.display = 'block';
        scrollToTop();
        return false;
    } 

}

const scroll = document.getElementById('scroll')
function scrollToTop() {
    scroll.scrollIntoView({behavior:'smooth'});
}

// BOTAO BLOQUEADO DEPOIS DE CLICADOconst modal = document.querySelector('#modal');
const fade = document.querySelector('#fade');
const botaoEnviar =  document.getElementById('button');

const toggleModal = () => {
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
}

botaoEnviar.addEventListener("click", () => {
    toggleModal();
})