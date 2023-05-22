document.addEventListener('DOMContentLoaded', function() {
    eventListener();
    darkMode();
});

function darkMode() {
    const prefiereDarkMode= window.matchMedia('(prefers-color-scheme: dark)');
    //console.log(prefiereDarkMode.matches);

    if(prefiereDarkMode){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function(){
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }   
    })


    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}

function eventListener(){
    const mobileMenu=document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    console.log('desde navegacionResponsives');
    const navegacion=document.querySelector('.navegacion');

    /* if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');
    } */
    navegacion.classList.toggle('mostrar');
}
function seleccionarCategoria(categoria) {
    document.getElementById('categoria').value = categoria;
}
document.getElementById('borrar').addEventListener('click', function() {
    event.preventDefault();
    document.getElementById('nombre').value = '';
    document.getElementById('apellido').value = '';
    document.getElementById('correo').value = '';
    document.getElementById('cantidad').value = '';
    document.getElementById('categoria').value = 'estudiante';
    //document.getElementById('total').innerText = 'Total a pagar $:';
    document.getElementById('total').style.display = 'none';
    document.getElementById('error').style.display = 'none';
    // document.getElementById('miFormulario').reset();
});
document.getElementById('resumen').addEventListener('click', function() {
    event.preventDefault();
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var correo = document.getElementById('correo').value;
    var categoria = document.getElementById('categoria').value;
    var cantidad = document.getElementById('cantidad').value;

    var validaCorreo = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;

    if (!nombre || !apellido || !correo || !cantidad || !categoria) {
        document.getElementById('error').style.display = 'block';
        document.getElementById('error').innerText = 'Por favor, completa todos los campos del formulario.';
        return;
    }else if (!validaCorreo.test(correo)) {
        document.getElementById('error').style.display = 'block';
        document.getElementById('error').innerText = 'Por favor, introduce un correo electrónico válido.';
        return;
    }else {
        document.getElementById('error').style.display = 'none';
    }
    var descuento;
    var entrada = 200;

    switch (categoria) {
        case 'estudiante':
            descuento = 0.8;
            break;
        case 'trainee':
            descuento = 0.5;
            break;
        case 'junior':
            descuento = 0.15;
            break;
        default:
            descuento = 0;
    }

    var total = cantidad * entrada * (1 - descuento);
    total = total.toFixed(2); // redondea el total a 2 decimales

    document.getElementById('total').innerText = 'Total a pagar $: ' + total;
    document.getElementById('total').style.display = 'block';
});