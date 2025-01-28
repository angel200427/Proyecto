// Manejo del envío del formulario
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Previene el envío del formulario (recarga de la página)

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    // Validación básica de los campos
    if (name === "" || email === "") {
        alert("Por favor, completa todos los campos.");
        return;
    }

    // Si todo está correcto, mostrar mensaje
    alert(`Gracias, ${name}! Hemos recibido tu mensaje.`);
    
    // Resetear el formulario
    document.getElementById('contactForm').reset();
});
