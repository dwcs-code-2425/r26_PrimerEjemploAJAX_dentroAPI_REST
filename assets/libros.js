const URL_BASE = '/api/v2';
const API_LIBROS = `${URL_BASE}/libros`;

document.addEventListener('DOMContentLoaded', () => {

    const btn = document.getElementById('btnLibros');

    if (!btn) return;

    btn.addEventListener('click', () => {

        fetch(API_LIBROS)
            .then(response => response.json())
            .then(libros => {
                mostrarLibros(libros);
            })
            .catch(error => console.error('Ha ocurrido un error:', error));

    });

});

function mostrarLibros(libros) {
    const lista = document.getElementById('listaLibros');
    lista.innerHTML = '';

    libros.forEach(libro => {
        const li = document.createElement('li');
        li.textContent = libro.titulo;
        lista.appendChild(li);
    });
}