const day = document.querySelector(".day .numb");
const hour = document.querySelector(".hour .numb");
const min = document.querySelector(".min .numb");
const sec = document.querySelector(".sec .numb");

var timer = setInterval(() => {

    var currentDate = new Date().getTime();
    var launchDate = new Date('sep 28, 2023 12:00:00').getTime();
    var duration = launchDate - currentDate;

    var days = Math.floor(duration / (1000 * 60 * 60 * 24));
    var hours = Math.floor((duration % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((duration % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((duration % (1000 * 60)) / 1000);

    day.innerHTML = days;
    hour.innerHTML = hours;
    min.innerHTML = minutes;
    sec.innerHTML = seconds;


}, 1000)

function stars() {
    let count = 20;
    let scene = document.querySelector('.scene');
    let i = 0;

    while (i < count) {
        let star = document.createElement('i');
        let x = Math.floor(Math.random() * window.innerWidth);

        let duration = Math.random() * 1;
        let h = Math.random() * 100;

        star.style.left = x + 'px';
        star.style.width = 1 + 'px';
        star.style.height = 40 + h + 'px';
        star.style.animationDuration = duration + 's';

        scene.appendChild(star);
        i++

    }
}
stars();

const sr = ScrollReveal ({
    distance: '70px',
    duration: '2000',
    reset: true

})

sr.reveal('.heading-text' , {delay: 200 , origin: 'right'})
sr.reveal('.timer.day' , {delay: 100 , origin: 'left'})
sr.reveal('.timer.hour' , {delay: 200 , origin: 'left'})
sr.reveal('.timer.min' , {delay: 300 , origin: 'left'})
sr.reveal('.timer.sec' , {delay: 400 , origin: 'left'})

