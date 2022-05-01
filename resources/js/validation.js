//validando formulario login

let btn_login = document.querySelector('#btnLogin');
let form_login = document.querySelector('#formLogin');
let input_rgm = document.querySelector('#validaRGM');

if (btn_login && form_login && input_rgm){
    btn_login.addEventListener('click', function(e){
        e.preventDefault();
        if (input_rgm.value.length < 8){
            let aviso = document.querySelector('#aviso');
            aviso.classList.add('alert-danger');
            aviso.classList.remove('d-none');
            aviso.innerHTML = 'RGM inválido';
            input_rgm.focus();
        }
        else {
            form_login.submit();
        }
    });
}

// valida nome materia
let input_materia = document.querySelector('#nomeMateria');
let form_materia = document.querySelector('#formMateria');
let btn_add_materia = document.querySelector('#btnAddMateria');

if (input_materia && form_materia && btn_add_materia){
    btn_add_materia.addEventListener('click', function(e){
        e.preventDefault();
        if( input_materia )
    
    });
}