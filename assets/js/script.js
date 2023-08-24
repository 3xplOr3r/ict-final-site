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
