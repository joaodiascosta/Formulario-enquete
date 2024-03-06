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
var bairro = document.querySelectorAll('.bairro');
var bairrovazio = document.getElementById('erro-bairro');

const botaoEnviar = document.getElementById('button');
const textInput = document.getElementById('name');
const emailInput = document.getElementById('email');

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


textInput.addEventListener('keypress', () => {
    var tamanhoNome = textInput.value;
    if(tamanhoNome.length >= 2) {
        botaoEnviar.removeAttribute('disabled');
    }
});


// function checkFormInput() {
//     let campoPreenchido = true;
    
//     formInput.forEach((campo) => {
//       if (campo.value === '' ) {
//           campoPreenchido = false;
//       }
//     });

//     if (campoPreenchido) {
//         botaoEnviar.removeAttribute('disabled');
//         botaoEnviar.style.opacity = 1;
//         botaoEnviar.style.cursor = "pointer";
//     } else {
//         botaoEnviar.disabled = true;
//     }
// }
  
// formInput.forEach((campo) => {
//     campo.addEventListener('input', checkFormInput);
// });



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
