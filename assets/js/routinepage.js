var form_1 = document.querySelector(".form_1");
var form_2 = document.querySelector(".form_2");
var form_3 = document.querySelector(".form_3");
var form_4 = document.querySelector(".form_4");

var form_1_btns = document.querySelector(".form_1_btns");
var form_2_btns = document.querySelector(".form_2_btns");
var form_3_btns = document.querySelector(".form_3_btns");
var form_4_btns = document.querySelector(".form_4_btns");

var form_1_next_btn = document.querySelector(".form_1_btns .btn_next");
var form_2_back_btn = document.querySelector(".form_2_btns .btn_back");
var form_2_next_btn = document.querySelector(".form_2_btns .btn_next");
var form_3_back_btn = document.querySelector(".form_3_btns .btn_back");
var form_4_back_btn = document.querySelector(".form_4_btns .btn_back");

var form_1_progressbar = document.querySelector(".form_1_progressbar");
var form_2_progressbar = document.querySelector(".form_2_progressbar");
var form_3_progressbar = document.querySelector(".form_3_progressbar");

var btn_done = document.querySelector(".btn_done");
var modal_wrapper = document.querySelector(".modal_wrapper");
var shadow = document.querySelector(".shadow");

form_1_next_btn.addEventListener("click", function(){
    form_1.style.display = "none";
    form_2.style.display = "block";

    form_1_btns.style.display = "none";
    form_2_btns.style.display = "flex";

	form_2_progressbar.classList.add("active");
});

form_2_back_btn.addEventListener("click", function(){
    form_2.style.display = "none";
    form_1.style.display = "block";

    form_2_btns.style.display = "none";
    form_1_btns.style.display = "flex";

	form_2_progressbar.classList.remove("active");
});

form_2_next_btn.addEventListener("click", function(){
    var selectedRadioButton = document.querySelector('input[type="radio"][name="routine_type"]:checked');
    if (selectedRadioButton && selectedRadioButton.value === "referred") {
        form_2.style.display = "none";
        form_4.style.display = "block";

        form_2_btns.style.display = "none";
        form_4_btns.style.display = "flex";
		form_3_progressbar.classList.add("active");
    } else {
        form_2.style.display = "none";
        form_3.style.display = "block";

        form_2_btns.style.display = "none";
        form_3_btns.style.display = "flex";
        form_3_progressbar.classList.add("active");
    }
});

form_3_back_btn.addEventListener("click", function(){
    form_3.style.display = "none";
    form_2.style.display = "block";

    form_3_btns.style.display = "none";
    form_2_btns.style.display = "flex";
    form_3_progressbar.classList.remove("active");
});

form_4_back_btn.addEventListener("click", function(){
    form_4.style.display = "none";
    form_2.style.display = "block";

    form_4_btns.style.display = "none";
    form_2_btns.style.display = "flex";

	form_3_progressbar.classList.remove("active");
});

btn_done.addEventListener("click", function(){
    modal_wrapper.classList.add("active");
});


