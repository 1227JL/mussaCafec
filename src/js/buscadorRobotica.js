const categoriaCheckboxes = document.querySelectorAll('.categoria-checkbox');
const buscadorInput = document.getElementById('buscadorR');
const datosElements = document.querySelectorAll('.proyectosRobotica');

function actualizarFiltros() {
    const textoBusqueda = buscadorInput.value.toLowerCase();
    const categoriaSeleccionada = Array.from(categoriaCheckboxes).find(checkbox => checkbox.checked);

    datosElements.forEach(datos => {
        const proyecto = datos.querySelector('.Proyecto').textContent.toLowerCase();
        const categoria = datos.querySelector('.categoria').textContent.toLowerCase();

        const mostrarPorCategoria = !categoriaSeleccionada || categoriaSeleccionada.value.toLowerCase() === categoria;
        const mostrarPorTexto = proyecto.includes(textoBusqueda);

        if (mostrarPorCategoria && mostrarPorTexto) {
            datos.style.display = 'block';
        } else {
            datos.style.display = 'none';
        }
    });
}

categoriaCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
            categoriaCheckboxes.forEach(otherCheckbox => {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        }
        actualizarFiltros();
    });
});

buscadorInput.addEventListener('input', actualizarFiltros);

// Mostrar todos los resultados al cargar la página
actualizarFiltros();