// LOADER FUNCTION 

window.addEventListener('load', function() {
    const loader = document.getElementById('loaderf');
    loader.style.display = "block";

    this.setTimeout( function() {
        loader.style.display = "none";
    },);
});

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

  window.onload = function() {
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
        },5000);
    }
    repeater();
  }
  Repeat();

  }

//   Ranking Table

function sortAndNumberRows() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.querySelector('.rank-table-data');
    switching = true;
  
    while (switching) {
      switching = false;
      rows = table.rows;
  
      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
  
        x = parseFloat(rows[i].getElementsByTagName('td')[4].innerHTML);
        y = parseFloat(rows[i + 1].getElementsByTagName('td')[4].innerHTML);
  
        if (x < y) {
          shouldSwitch = true;
          break;
        }
      }
  
      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  
    for (i = 1; i < rows.length; i++) {
      rows[i].getElementsByTagName('td')[0].innerHTML = i +".";
    }
  }
  
  sortAndNumberRows();


// Function to display top 3 students in reverse order for rank-cards
function displayTop3ReverseForRankCards() {
    // Get all rows in the table except the header row
    const rows = document.querySelectorAll('.rank-table-data tbody tr');
    const rowsArray = Array.from(rows);
  
    // Sort the rows based on CGPA in descending order
    rowsArray.sort((a, b) => {
      const cgpaA = parseFloat(a.getElementsByTagName('td')[4].innerText);
      const cgpaB = parseFloat(b.getElementsByTagName('td')[4].innerText);
      return cgpaB - cgpaA; // Descending order
    });
  
    // Display top 3 students in the specific reverse order for rank-cards
    const rankCards = document.querySelectorAll('.rank-card');
    rankCards[0].querySelector('img').src = rowsArray[1].getElementsByTagName('td')[1].querySelector('img').src;
    rankCards[0].querySelector('h5').innerText = rowsArray[1].getElementsByTagName('td')[2].innerText;
    rankCards[0].querySelector('.col-2 p:nth-child(1)').innerText = rowsArray[1].getElementsByTagName('td')[3].innerText;
    rankCards[0].querySelector('.col-2 p:nth-child(2)').innerText = rowsArray[1].getElementsByTagName('td')[4].innerText;
    rankCards[0].querySelector('.col-2 p:nth-child(3)').innerText = rowsArray[1].getElementsByTagName('td')[5].innerText;
  
    rankCards[1].querySelector('img').src = rowsArray[0].getElementsByTagName('td')[1].querySelector('img').src;
    rankCards[1].querySelector('h5').innerText = rowsArray[0].getElementsByTagName('td')[2].innerText;
    rankCards[1].querySelector('.col-2 p:nth-child(1)').innerText = rowsArray[0].getElementsByTagName('td')[3].innerText;
    rankCards[1].querySelector('.col-2 p:nth-child(2)').innerText = rowsArray[0].getElementsByTagName('td')[4].innerText;
    rankCards[1].querySelector('.col-2 p:nth-child(3)').innerText = rowsArray[0].getElementsByTagName('td')[5].innerText;
  
    rankCards[2].querySelector('img').src = rowsArray[2].getElementsByTagName('td')[1].querySelector('img').src;
    rankCards[2].querySelector('h5').innerText = rowsArray[2].getElementsByTagName('td')[2].innerText;
    rankCards[2].querySelector('.col-2 p:nth-child(1)').innerText = rowsArray[2].getElementsByTagName('td')[3].innerText;
    rankCards[2].querySelector('.col-2 p:nth-child(2)').innerText = rowsArray[2].getElementsByTagName('td')[4].innerText;
    rankCards[2].querySelector('.col-2 p:nth-child(3)').innerText = rowsArray[2].getElementsByTagName('td')[5].innerText;
  }
  
  // Call the function to display top 3 students in reverse order for rank-cards
  displayTop3ReverseForRankCards();
  