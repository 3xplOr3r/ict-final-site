let bg = document.getElementById('outer');
let number = document.getElementById('numberr');
let value = document.getElementById('val');
let txt = document.getElementById('quote');
let numValue = parseInt(value.innerHTML);
let counter = 0;

let interval = setInterval(() =>{

    counter ++;
    number.innerHTML = `${counter}%`;
    bg.style.background = `conic-gradient( 
        #6f6af8 ${counter * 3.6}deg,
        #2d2b7c ${counter * 3.6}deg
    )`;



    if (counter == numValue) {

        clearInterval(interval);

    }

    if (counter < 40) {
        txt.innerHTML = "<h3>very poor! you need to improve your performance.</h3><br><p>Regular attendance promotes consistent learning, fosters stronger student-teacher relationships, and enhances academic performance.</p>";
    } else if (counter < 60) {
        txt.innerHTML = "<h3>very good! thank you for your dedication.</h3><br><p>Regular attendance promotes consistent learning, fosters stronger student-teacher relationships, and enhances academic performance.</p>";
    } else {
        txt.innerHTML = "<h3>Strive for progress, as your current performance paves the way for future success.</h3><br><p>Regular attendance promotes consistent learning, fosters stronger student-teacher relationships, and enhances academic performance.</p>";
    }

},30)

const sr = ScrollReveal ({
    distance: '100px',
    duration: '2200',
    reset: true
})

sr.reveal('.bar' , {delay: 200 , origin: 'left'})
sr.reveal('.quote' , {delay: 400 , origin:'right'})
