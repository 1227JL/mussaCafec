window.addEventListener('load', ()=> {

    if (document.querySelector('.splide')) {
        const splide = new Splide('.splide', {
            perPage: 1,
            rewind: true,
        });
    
        splide.mount();
    }
    
    
})