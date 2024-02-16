-- toppers table query

CREATE TABLE topperlist (
    id INT(10) AUTO_INCREMENT,
    topperimg VARCHAR(255),
    toppername VARCHAR(255),
    dept VARCHAR(30),
    cgpa VARCHAR(255),
    ssession VARCHAR(255),
    PRIMARY KEY (id)
)

CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roll_number INT,
    date DATE,
    status VARCHAR(1),
    FOREIGN KEY (roll_number) REFERENCES students(roll) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE INDEX idx_roll_number ON attendance (roll_number);


<!DOCTYPE html>
<html>
<head>
    <title>ICT-Institute Of Comunication technology</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/x-icon/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/computer.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<!-- HEADER SECTION -->

<header>
  <div class="container">
      <input type="checkbox" name="" id="check">
      
      <div class="logo-container">
          <img src="/img/logo.png" alt="LOGO" class="logo">
      </div>

      <div class="nav-btn">
          <div class="nav-links">
              <ul>
                  <li class="nav-link" style="--i: .6s">
                      <a href="index.html">Home</a>
                  </li>
                  <li class="nav-link" style="--i: .85s">
                      <a href="#">About<i class="fas fa-caret-down"></i></a>
                      <div class="dropdown">
                          <ul>
                              <li class="dropdown-link">
                                  <a href="about.html">At A Glance</a>
                              </li>
                              <li class="dropdown-link">
                                  <a href="mission.html">Mission & Vision</a>
                              </li>
                              <li class="dropdown-link">
                                  <a href="events.html">Events Gallery</a>
                              </li>
                              <div class="arrow"></div>
                          </ul>
                      </div>
                  </li>
                  <li class="nav-link" style="--i: 1.1s">
                      <a href="#">Administration<i class="fas fa-caret-down"></i></a>
                      <div class="dropdown">
                          <ul>
                              <li class="dropdown-link">
                                  <a href="/administration/blog.html">Blogs</a>
                              </li>
                              <li class="dropdown-link">
                                  <a href="administration/administrative.html">Faculty Members</a>
                              </li>
                              <li class="dropdown-link">
                                  <a href="#">Link 3<i class="fas fa-caret-down"></i></a>
                                  <div class="dropdown second">
                                      <ul>
                                          <li class="dropdown-link">
                                              <a href="#">Link 1</a>
                                          </li>
                                          <li class="dropdown-link">
                                              <a href="#">Link 2</a>
                                          </li>
                                          <li class="dropdown-link">
                                              <a href="#">Link 3</a>
                                          </li>
                                          
                                          <div class="arrow"></div>
                                      </ul>
                                  </div>
                              </li>
                              <li class="dropdown-link">
                                  <a href="/administration/team.html">Developer Team</a>
                              </li>
                              <div class="arrow"></div>
                          </ul>
                      </div>
                  </li>
                  <li class="nav-link" style="--i: 1.35s">
                      <a href="admission.html">Admission<i class="fas fa-caret-down"></i></a>
                      <div class="dropdown">
                          <ul>
                              <li class="dropdown-link">
                                  <a href="admission.html">How to apply</a>
                              </li>
                              <li class="dropdown-link">
                                  <a href="./admission/apply.php">Apply Online</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="/admission/courses.html">Courses</a>
                              </li>
                              <div class="arrow"></div>
                          </ul>
                      </div>
                  </li>
                  <li class="nav-link" style="--i: 1.35s"><a href="department.html">Our Department</a></li>
                  <li class="nav-link" style="--i: 1.35s"><a href="contact.html">Contact Us</a></li>
              </ul>
          </div>

          <div class="social-icon">
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              <br>
              <h2>DESIGN & DEVELOPED BY<a href="">@BACKBENCHER ASSOCIATION</a></h2>
          </div>

      </div>

      <div class="hamburger-menu-container">
          <div class="hamburger-menu">
              <div></div>
          </div>
      </div>
  </div>
</header>
<!-- HEADER ENDS -->

<!-- MAIN CONTENTS -->



<!-- MAIN CONTENTS -->




<!-- FOOTER SECTION STRATS -->

<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="foo-col">
          <h1>Social Links</h1>
          <div class="social-links">
            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>  
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a> 
            <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>
          </div>
  
        </div>
  
        <div class="foo-col">
          <h1>Contact Us</h1>
          <h3>Opposite of the House Building<br>House #16,Alaol Avenue,Dhaka-1230</h3>
          <div class="nmbrs">
            <i class="fa fa-phone" aria-hidden="true"><p>012-345-6789</p></i>
            <i class="fa fa-phone" aria-hidden="true"><p>012-345-6789</p></i>
            <i class="fa fa-whatsapp" aria-hidden="true"><p>012-345-6789</p></i>
            <i class="fa fa-envelope-o" aria-hidden="true"><p>ict@gmail.com</p></i>
          </div>
        </div>
  
        <div class="foo-col">
          <h1>Important Links</h1>
          <ul>
  
            <li><a href="https://corona.gov.bd/">Corona Information</a></li>
            <li><a href="http://www.bteb.gov.bd/">BTEB</a></li>
            <li><a href="https://www.duet.ac.bd/">DUET</a></li>
            <li><a href="https://www.buet.ac.bd/web/#/">BUET</a></li>
            <li><a href="https://www.facebook.com/people/SAFS/100068363163701/">SAFS</a></li>
            <li><a href="#">About Us</a></li>
  
          </ul>
        </div>
  
        <div class="foo-col">
          <h1>Our Location</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4281782330386!2d90.39975971543291!3d23.87443088994275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43a158dd525%3A0x10efec2e9df28ce8!2sIct%20Polytechnic%20College!5e0!3m2!1sen!2sbd!4v1672654838071!5m2!1sen!2sbd" width="100%" height="150px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>
  
      </div>
    </div>
  
  </footer>
  
        <!--  COPYRIGHT -->
  
   <section class="copyright">
     <p>© 2023 Institute Of Comunication Technology. All rights reserved. Developed by <a href="#">Backbencher Association</a></p>
   </section>
  <!-- FOOTER SECTION ENDS -->
  
      <!--  JAVASCRIPT SECTION -->
  
      <script src="assets/js/script.js"></script>
  
      <!--  JAVASCRIPT SECTION -->
  
  
  </body>
  </html>


  @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@100;200;300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    box-sizing: border-box;
    font-family: 'poppins' , sans-serif;
    -ms-overflow-style: none;
    scrollbar-width: none;
    background-color: rgb(204, 204, 204);
}

body::-webkit-scrollbar {
    display: none;
}

/* CSS FOR HEADER */

ul{
    list-style: none;
}

a{
    text-decoration: none;
}

header{
    position: sticky;
    top: 0px;
    background-color: #215;
    width: 100%;
    z-index: 1000;
    box-shadow: 10px 0px 15px rgba(0,0,0,0.4);
}


.container{
    padding: 1rem 2rem;
    margin: 0 auto;
    display: flex;
    position: relative;
    align-items: center;
}

.logo-container{
    display: flex;
    align-items: center;
}

.logo-container img {
    width: 25%;
}


.nav-btn{
    flex: 3;
    display: flex;
}

.nav-links{
    flex: 2;
}

.social-icon {
    display: flex;
    align-items: center;
}

.social-icon a {
    font-size: 25px;
    padding: 10px;
    display: inline-block;
    color: whitesmoke;
}

.social-icon h2 {
    display: none;
}

.social-icon a:hover {
    transform: scale(1.3) rotate(25deg);
    transition: all .5s ease-in-out;
} 

.logo{
    color: #fff;
    font-size: 1.1rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    line-height: 3rem;
}

.logo span{
    font-weight: 300;
}

.btn{
    display: inline-block;
    padding: .5rem 1.3rem;
    font-size: .8rem;
    border: 2px solid #fff;
    border-radius: 2rem;
    line-height: 1;
    margin: 0 .2rem;
    transition: .3s;
    text-transform: uppercase;
}

.btn.solid, .btn.transparent:hover{
    background-color: #fff;
    color: #69bde7;
}

.btn.transparent, .btn.solid:hover{
    background-color: transparent;
    color: #fff;
}

.nav-links > ul{
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav-link{
    position: relative;
}

.nav-link > a{
    line-height: 3rem;
    color: #fff;
    padding: 0 .8rem;
    letter-spacing: 1px;
    font-size: .95rem;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: .5s;
}

.nav-link > a > i{
    margin-left: .2rem;
}

.nav-link:hover > a{
    transform: scale(1.1);
}

/*  CSS FOR DROPDOWN */

.dropdown{
    position: absolute;
    top: 100%;
    left: 0;
    width: 10rem;
    transform: translateY(10px);
    opacity: 0;
    pointer-events: none;
    transition: .5s;
}

.dropdown ul{
    position: relative;
}

.dropdown-link > a{
    display: flex;
    background-color: #fff;
    color: #215;
    padding: .5rem 1rem;
    font-size: .9rem;
    font-family: 'Poppins', sans-serif;
    align-items: center;
    justify-content: space-between;
    transition: .3s;
}

.dropdown-link:hover > a{
    background-color: #215;
    color: #fff;
}

.dropdown-link:not(:nth-last-child(2)){
    border-bottom: 1px solid #efefef;
}

.dropdown-link i{
    transform: rotate(-90deg);
}

.arrow{
    position: absolute;
    width: 11px;
    height: 11px;
    top: -5.5px;
    left: 32px;
    background-color: #fff;
    transform: rotate(45deg);
    cursor: pointer;
    transition: .3s;
    z-index: -1;
}

.dropdown-link:first-child:hover ~ .arrow{
    background-color: #3c2a97;
}

.dropdown-link{
    position: relative;
}

.dropdown.second{
    top: 0;
    left: 100%;
    padding-left: .8rem;
    cursor: pointer;
    transform: translateX(10px);
}

.dropdown.second .arrow{
    top: 10px;
    left: -5.5px;
}

.nav-link:hover > .dropdown,
.dropdown-link:hover > .dropdown{
    transform: translate(0, 0);
    opacity: 1;
    pointer-events: auto;
}

/*  CSS FOR HAMBURGER */

.hamburger-menu-container{
    flex: 1;
    display: none;
    align-items: center;
    justify-content: flex-end;
}

.hamburger-menu{
    width: 2.5rem;
    height: 2.5rem;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.hamburger-menu div{
    width: 1.6rem;
    height: 3px;
    border-radius: 3px;
    background-color: #fff;
    position: relative;
    z-index: 1001;
    transition: .5s;
}

.hamburger-menu div:before,
.hamburger-menu div:after{
    content: '';
    position: absolute;
    width: inherit;
    height: inherit;
    background-color: #fff;
    border-radius: 3px;
    transition: .5s;
}

.hamburger-menu div:before{
    transform: translateY(-7px);
}

.hamburger-menu div:after{
    transform: translateY(7px);
}

#check{
    position: absolute;
    top: 50%;
    right: 1.5rem;
    transform: translateY(-50%);
    width: 2.5rem;
    height: 2.5rem;
    z-index: 90000;
    cursor: pointer;
    opacity: 0;
    display: none;
}

#check:checked ~ .hamburger-menu-container .hamburger-menu div{
    background-color: transparent;
}

#check:checked ~ .hamburger-menu-container .hamburger-menu div:before{
    transform: translateY(0) rotate(-45deg);
}

#check:checked ~ .hamburger-menu-container .hamburger-menu div:after{
    transform: translateY(0) rotate(45deg);
}

/*  CSS FOR FOOTER */

.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #215;
    padding: 70px 0px 30px 0px;
}

.foo-col{
   width: 25%;
   padding: 0 15px;
}

.foo-col h1{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
    font-family: 'Rubik', sans-serif;
    text-decoration: underline;
}


.foo-col h3 {
    font-size: 14px;
    font-weight: 500;
    font-family: 'poppins', sans-serif;
    padding-bottom: 20px;
    color: #EFF0F3;
}

.nmbrs {
    display: block;
}

.nmbrs i p {
    display: inline-block;
}

.nmbrs i {
    color: rgb(167, 29, 63);
}


.nmbrs p {
    font-family: 'Poppins', sans-serif;
    color: #efefef;
    font-weight: 300;
}




.foo-col ul li:not(:last-child){
	margin-bottom: 10px;
}

.foo-col ul li a{
	font-size: 15px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 500;
	color: white;
	display: block;
	transition: all 0.3s ease;
    font-family: 'Poppins',sans-serif;
}

.foo-col ul li a:hover{
	color: rgb(236, 4, 82);
	padding-left: 8px;
}

.foo-col .social-links a{
	display: inline-block;
	height: 30px;
	width: 30px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 30px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}

.foo-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

.fa-phone:before {
    margin-right: 6px;
}

.fa-whatsapp:before {
    margin-right: 6px;
}

.fa-envelope-o:before {
    margin-right: 6px;
}

.copyright{
    padding: 30px 0;
    background-color: #215;
    text-align: center;
    color: white;
    box-shadow: 5px 0px 15px rgba(0,0,0,0.5);
}
.copyright p{
    font-size: 18px;
    font-family: 'Rubik', sans-serif;
    font-weight: 300;
}
.copyright a{
    font-weight: 400;
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    transition: .2s ease-in-out;
    font-family: 'Poppins',sans-serif;
}
.copyright a:hover{
    color: red;
    
}

@keyframes animation{
    from{
        opacity: 0;
        transform: translateY(15px);
    }
    to{
        opacity: 1;
        transform: translateY(0px);
    }
}

@media (max-width: 920px){
    .hamburger-menu-container{
        display: flex;
    }

    #check{
        display: block;
    }

    .nav-btn{
        position: fixed;
        height: calc(100vh - 6rem);
        top: 5.9rem;
        left: 0;
        width: 100%;
        background-color: #22165c;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        overflow-x: hidden;
        overflow-y: auto;
        transform: translateX(100%);
        transition: .65s;
    }

    #check:checked ~ .nav-btn{
        transform: translateX(0);
    }

    #check:checked ~ .nav-btn .nav-link,
    #check:checked ~ .nav-btn .log-sign{
        animation: animation .5s ease forwards var(--i);
    }

    .nav-links{
        flex: initial;
        width: 100%;
    }

    .nav-links > ul{
        flex-direction: column;
    }

    .nav-link{
        width: 100%;
        opacity: 0;
        transform: translateY(15px);
    }

    .nav-link > a{
        line-height: 1;
        padding: 1.6rem 2rem;
    }

    .nav-link:hover > a{
        transform: scale(1);
        background-color: #215;
    }

    .dropdown, .dropdown.second{
        position: initial;
        top: initial;
        left: initial;
        transform: initial;
        opacity: 1;
        pointer-events: auto;
        width: 100%;
        padding: 0;
        background-color: #3c2a97;
        display: none;
    }
    
    .nav-link:hover > .dropdown,
    .dropdown-link:hover > .dropdown{
        display: block;
    }

    .nav-link:hover > a > i,
    .dropdown-link:hover > a > i{
        transform: rotate(360deg);
    }

    .dropdown-link > a{
        background-color: transparent;
        color: #fff;
        padding: 1.2rem 2rem;
        line-height: 1;
    }

    .dropdown.second .dropdown-link > a{
        padding: 1.2rem 2rem 1.2rem 3rem;
    }

    .dropdown.second .dropdown.second .dropdown-link > a{
        padding: 1.2rem 2rem 1.2rem 4rem;
    }

    .dropdown-link:not(:nth-last-child(2)){
        border-bottom: none;
    }

    .arrow{
        z-index: 1;
        background-color: #215;
        left: 10%;
        transform: scale(1.1) rotate(45deg);
        transition: .5s;
    }

    .nav-link:hover .arrow{
        background-color: #215;
    }

    .dropdown .dropdown .arrow{
        display: none;
    }

    .dropdown-link:hover > a{
        background-color: #215;
    }

    .dropdown-link:first-child:hover ~ .arrow{
        background-color: #3c2a97;
    }

    .nav-link > a > i{
        font-size: 1.1rem;
        transform: rotate(-90deg);
        transition: .7s;
    }

    .dropdown i{
        font-size: 1rem;
        transition: .7s;
    }

    .log-sign{
        flex: initial;
        width: 100%;
        padding: 1.5rem 1.9rem;
        justify-content: flex-start;
        opacity: 0;
        transform: translateY(15px);
    }

    .social-icon a i {
        display: none;
    }

    .social-icon h2 a,
    .social-icon h2 {
        font-size: 15px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        display: initial;
    }

    .social-icon h2 {
        color: white;
    }

    .social-icon  h2 a {
        color:  rgb(129, 6, 6);
        font-weight: 700;
    }
}

@media (min-width: 921px) and (max-width: 1115px) {
    .social-icon {
        display: none;
    }

    .nav-link > a {
        font-size: 13px;
    }

}

@media (max-width: 525px) {
    .social-icon h2 {
        font-size: 12px;
        font-weight: 400;
        display: inline-block;
        margin-left: -20px;
    }
}

/* MEDIA FOR FOOTER */
@media(max-width: 767px){
    .foo-col{
      width: 50%;
      margin-bottom: 30px;
  }
  }
  @media(max-width: 574px){
    .foo-col{
      width: 100%;
  }
  }

  /* DONT TOUCH OR CHANGE ANY CODE FROM ABOVE. RESTRICTED */

/* CSS FOR FOOTER ENDS */
