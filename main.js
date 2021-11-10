const btndepartamentos = document.getElementById( 'btn-departamentos' ),
grid = document.getElementById('grid');



btndepartamentos.addEventListener('mauseover',() => {
grid.classList.add('activo');

});