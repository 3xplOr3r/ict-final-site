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