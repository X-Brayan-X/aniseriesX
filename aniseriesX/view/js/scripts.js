const alert = document.getElementById('errores');
const name = document.getElementById('username');
const password = document.getElementById('password');
const form = document.getElementById('form');

form.addEventListener('submit',
    e=>{
        e.preventDefault();
        console.log('enviando formulario');
        if (name.value == ''|| password.value==''){
            alert.INNERhtml= "coiascer";
        }
    }
);