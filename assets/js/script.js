//RESPONSIVE COUNTER.

var a = 0;
$(window).scroll(function () {
    var oTop = $(".counter").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $(".ctn").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-count");
            $({
                countNum: $this.text()
            }).animate(
                {
                    countNum: countTo
                },

                {
                    duration: 1500,
                    easing: "swing",
                    step: function () {
                        $this.text(
                            Math.ceil(this.countNum).toLocaleString("en")
                        );
                    },
                    complete: function () {
                        $this.text(
                            Math.ceil(this.countNum).toLocaleString("en")
                        );
                    }
                }
            );
        });
        a = 1;
    }
});

//RESPONSIVE SLIDER 

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2,
      slideShadows: false,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    speed: 1200,
  });


  // for hero section 

  var slides = document.querySelectorAll(".slide");
  var btns = document.querySelectorAll(".sl-btn");

  let currentSlide = 1;
// manual nav

  var manualNav = function(manual) {
    slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
            btn.classList.remove('active');
        })

    });


    slides[manual].classList.add('active');
    btns[manual].classList.add('active');

  }

  btns.forEach((btn, i) => {

    btn.addEventListener("click" , () => {
        manualNav(i);
        currentSlide = i;
    })

  });




  var Repeat = function(activePlay) {

    let active = document.getElementsByClassName("active");
    let i = 0;

    var repeater = () => {
        setTimeout(function() {

            [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('active');
            });

            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;

            if(slides.length == i) {
                i = 0;
            }
            if(i>=slides.length) {
                return;
            }
            repeater();
        }, 5000);
    }
    repeater();
  }
  Repeat();