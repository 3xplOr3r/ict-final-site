$(document).ready(function() {
    $(".filter-item").click(function(){
        const value = $(this).attr("data-filter")
        if(value == "all") {
            $(".post-box").show("1000")
        }
        else {
            $(".post-box")
            .not("." + value)
            .hide("1000");
            $(".post-box")
            .filter("." + value)
            .show("1000");
        }
    });

    $(".filter-item").click(function(){
        $(this).addClass("active-filter").siblings().removeClass("active-filter");
    })

})

const sr = new ScrollReveal({
    duration: '1500',
    distance: '60px',
    reset: false
});

sr.reveal('.post-box.one' , {delay: 100 , origin: 'left'})
sr.reveal('.post-box.two' , {delay: 200 , origin: 'left'})
sr.reveal('.post-box.three' , {delay: 300 , origin: 'left'})
sr.reveal('.post-box.four' , {delay: 400 , origin: 'left'})
sr.reveal('.post-box.five' , {delay: 500 , origin: 'left'})
sr.reveal('.post-box.six' , {delay: 600 , origin: 'left'})