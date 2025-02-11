// Este archivo puede contener interactividad adicional si es necesario
document.addEventListener('DOMContentLoaded', function () {
    // Puedes agregar funcionalidades aquí si es necesario, como validaciones de formulario
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', function (e) {
        // Prevenir el envío del formulario para validaciones
        e.preventDefault();
        
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        
        if (name && email) {
            alert('Formulario enviado con éxito');
            // Aquí podrías hacer una solicitud AJAX para enviar el formulario sin recargar la página
        } else {
            alert('Por favor, completa todos los campos');
        }
    });
});
