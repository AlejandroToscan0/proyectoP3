// Función para mostrar el formulario de edición cuando se hace clic en el enlace de editar
document.querySelectorAll('a.editar').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        document.getElementById('editarForm').style.display = 'block';
    })
});

// Función para mostrar una ventana de confirmación antes de eliminar un usuario
document.querySelectorAll('a.eliminar').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        if (confirm('¿Estás seguro de que quieres eliminar este usuario?')) {
            window.location.href = item.getAttribute('href');
        }
    })
});
