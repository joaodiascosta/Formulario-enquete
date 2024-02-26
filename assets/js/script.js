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

function isEmailValid(email) {
    const emailRegex = new RegExp (
        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/
    );

    if(emailRegex.teste(email)) {
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
})