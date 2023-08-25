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