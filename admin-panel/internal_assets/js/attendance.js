//show table according to student data

// |---------------------|
// |                     |
// | booklists           |
// |---------------------|

// Sample books data structure


const Books = {
  computer : {
    "1st" : ["English-1", "Bangla-1" ,"Engineering Drawing" ,"Mathematics-1" ,"Physics-1" ,"Computer Office Application" ,"Basic Electricity"],
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


  // AJAX REQUEST 
  // Assuming your_script.js is a separate JavaScript file

$(document).ready(function () {
  // Click event for the "Get Report" button
  $(".callback_report").click(function (e) {
      e.preventDefault();

      // Fetch selected department, semester, and subject values
      const department = $("#department").val();
      const semester = $("#semester").val();
      const subject = $("#subject").val();


      $.ajax({
        type: "GET",
        url: "testing.php",
        data: { department: department, semester: semester, subject: subject },
        success: function (data) {
            // Parse the JSON response
            var students = JSON.parse(data);
    
            // Clear existing content in the #report div
            $("#report").empty();
    
            // Create a table and append it to the #report div
            var table = $("<table>").addClass("table");
            var thead = $("<thead>").appendTo(table);
            var tbody = $("<tbody>").appendTo(table);
    
            // Create table headers
            var headers = ["Student_Roll", "First Name", "Last Name"]; // Add more headers as needed
            var headerRow = $("<tr>").appendTo(thead);
            headers.forEach(function (header) {
                $("<th>").text(header).appendTo(headerRow);
            });
    
            // Populate table body with student data
            students.forEach(function (student) {
                var row = $("<tr>").appendTo(tbody);
                $("<td>").text(student.student_Roll).appendTo(row);
                $("<td>").text(student.firstname).appendTo(row);
                $("<td>").text(student.lastname).appendTo(row);
                // Add more cells for other fields as needed
            });
    
            // Append the table to the #report div
            table.appendTo("#report");
        },
        error: function (error) {
            console.error("Error generating attendance table: ", error);
        }
    });
    

  });
});
