// DROPDOWN
$(document).ready(function(){
  //jquery for toggle sub menus
  $('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
  });

  //jquery for expand and collapse the sidebar
  $('.menu-btn').click(function(){
    $('.side-bar').addClass('active');
    $('.menu-btn').css("visibility", "hidden");
  });

  $('.close-btn').click(function(){
    $('.side-bar').removeClass('active');
    $('.menu-btn').css("visibility", "visible");
  });
});



//show table according to student data

// |---------------------|
// |                     |
// | booklists           |
// |---------------------|

// Sample books data structure



const Books = {
  computer : {
    "7th" : ["English-1", "Bangla-1" ,"Engineering Drawing" ,"Mathematics-1" ,"Physics-1" ,"Computer Office Application" ,"Basic Electricity"],
    "2nd" : ["English-2", "Bangla-2" ,"Physical Education and Life Skill Development" ,"Mathematics-2" ,"Physics-2" ,"Computer Graphic Design-1" ,"Basic Electronics" ,"Python Programming"] 
  }
}


function populateSubjects() {
    var department = document.getElementById('department');
    var semester = document.getElementById('semester');
    var subjects = document.getElementById('subjects');

    selectedDept = department.value;
    selectedSem = semester.value;

    subjects.innerHTML = '<option value="">Select Subject</option>';

    if(Books[selectedDept] && Books[selectedDept][selectedSem]) {
      Books[selectedDept][selectedSem].forEach(function(book) {
        addOption(subjects,book,book);
      });
    };
  }

function addOption(selectElement,text,value) {
    var option = document.createElement('option');
    option.text = text;
    option.value = value;
    selectElement.add(option);
  }

  populateSubjects();


// report generation
  function getAttendanceReport() {
    // Get form data
    var department = $('#department').val();
    var semester = $('#semester').val();
    var subject = $('#subjects').val();

    // AJAX request
    $.ajax({
        type: 'POST',
        url: './attendance-logic.php',
        data: { department: department, semester: semester, subject: subject},
        success: function(response) {
            // Update the content of the report div with the response
            $('#report').html(response);
        },
        error: function(error) {
            console.log(error);
        }
    });
}


// updating report 
function updateReport() {
  
}