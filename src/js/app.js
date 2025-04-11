document.addEventListener('DOMContentLoaded', () => {
    eventListeners();
    darkMode();
});

const darkMode = () => {

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    // console.log(prefiereDarkMode.matches);

    /** Si el usuario tiene preferencia por dark mode activado */
    if(prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    /** Cuando el usuario enciende o apaga el dark mode en el sistema operativo **/
    prefiereDarkMode.addEventListener('change', () => {
        if(prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });

    const darkModeBoton = document.querySelector('.dark-mode-boton');
    darkModeBoton.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
}

const eventListeners = () => {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);

    //mostrar campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarOcultarCampos));
}

const navegacionResponsive = () => {
    const navegacion = document.querySelector('.navegacion');
    /* if(navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    } */
    navegacion.classList.toggle('mostrar'); //es lo mismo que lo de arriba pero con menos lineas
}

const mostrarOcultarCampos = (e) => {
    const contactoDiv = document.querySelector('#contacto');

    if(e.target.value === 'telefono') {
        contactoDiv.innerHTML = `
            <input type="tel" id="telefono" placeholder="Tu Teléfono" name="contacto[telefono]" required>
            <p>Elija la fecha y la hora para ser contactado</p>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="contacto[fecha]" min="2025-01-01" max="2025-12-31" required>
            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="contacto[hora]" min="09:00" max="18:00" required>
        `;
    } else {
        contactoDiv.innerHTML = `
            <input type="email" id="email" placeholder="Tu E-mail" name="contacto[email]" required>
        `;
    }
}

const validarForm = (e) => {
    e.preventDefault();
    const nombre = document.querySelector('#nombre').value.trim();
    const mensaje = document.querySelector('#mensaje').value.trim();
    const tipo = document.querySelector('[name="contacto[tipo]"]').value.trim();
    const boton = document.querySelector('input[type="submit"]');
    
    if(nombre === '' || mensaje === '' || tipo === '') {
        alert('Todos los campos son obligatorios');
        return false;
    }
}