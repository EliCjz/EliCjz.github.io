document.addEventListener("DOMContentLoaded", function() {
    var botones = document.querySelectorAll('.options button');
    var imagenes = document.querySelectorAll('.galeria-imagenes img');
    
    botones.forEach(function(boton, index) {
        boton.addEventListener('click', function() {
            mostrarImagen(index);
        });
    });

    function mostrarImagen(index) {
        // Ocultar todas las imágenes
        imagenes.forEach(function(img) {
            img.style.display = 'none';
        });
        
        // Mostrar solo la imagen seleccionada
        imagenes[index].style.display = 'block';
    }
});
