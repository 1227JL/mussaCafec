window.addEventListener('load', ()=> {
    
    const splideElements = document.querySelectorAll('.splide');

    // Recorre cada elemento y crea una instancia de Splide
    splideElements.forEach(element => {
        const splide = new Splide(element, {
            perPage: 1,
            rewind: true,
        });
    
        splide.mount();
    });

    const menu = document.querySelector('#menu');
    const modal = document.querySelector('#modal');
    const closeButton = document.querySelector('#closeButton');

    function closeModal(){
        if (!modal.classList.contains('off')) {
            modal.classList.add("off");
        } else{
            modal.classList.remove("off");
        };
    }

    menu.addEventListener('click', closeModal)
    closeButton.addEventListener('click', closeModal)

    AOS.init();

})

//VER TERMINOS PARA CATERORIA ACADEMICA
function archivoAcademico() {
    var rutaArchivo = "/resources/terminos/Terminosycondiciones_2023.pdf";
    window.open(rutaArchivo, "_blank");
}
//VER TERMINOS PARA CATERORIA ROBOTICA
function archivoRobotica() {
    var rutaArchivo = "/resources/terminos/ITORNEO_ROBOTICA_SENA_2023.pdf";
    window.open(rutaArchivo, "_blank");
}
//VER TERMINOS PARA CATERORIA Feria
function archivoFeria() {
    var rutaArchivo = "/resources/terminos/terminos_feriaEmpresarial.pdf";
    window.open(rutaArchivo, "_blank");
}