const sr = new ScrollReveal({

    duration: '1500',
    distance: '60px',
    reset: false


});

sr.reveal('.img-bx' , {delay: 100 , origin: 'right'});
sr.reveal('.dept-details' , {delay: 200 , origin: 'left'});
sr.reveal('.dept-card' , {delay: 300 , origin: 'bottom' , interval: 200});