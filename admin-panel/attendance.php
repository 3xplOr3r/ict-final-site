<?php 
    include('../includes/header.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Dashboard</title>
   <link rel="stylesheet" href="./internal_assets/css/attendance.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
 </head>
 <body>

   <div class="menu-btn">
     <i class="fas fa-bars"></i>
   </div>

   <section class="side-bar">

    <div class="menu">

    <nav>
    <div class="image-in-top">
        <img src="../img/logo.png" alt="">
    </div>
    <div class="close-btn">
        <i class="fas fa-times"></i>
    </div>
    </nav>

        <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>Tables<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Sub Item 01</a>
           <a href="#" class="sub-item">Sub Item 02</a>
           <a href="#" class="sub-item">Sub Item 03</a>
         </div>
       </div>

       <div class="item">
         <a class="sub-btn"><i class="fas fa-id-card"></i>Attendances<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Give Attendance</a>
           <a href="#" class="sub-item">View Attendance</a>
         </div>
       </div>

       <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>Tables<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Sub Item 01</a>
           <a href="#" class="sub-item">Sub Item 02</a>
           <a href="#" class="sub-item">Sub Item 03</a>
         </div>
       </div>

       <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>Tables<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Sub Item 01</a>
           <a href="#" class="sub-item">Sub Item 02</a>
           <a href="#" class="sub-item">Sub Item 03</a>
         </div>
       </div>

       <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>Tables<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Sub Item 01</a>
           <a href="#" class="sub-item">Sub Item 02</a>
           <a href="#" class="sub-item">Sub Item 03</a>
         </div>
       </div>

    </div>

   </section>

   <section class="main-body">

   <div class="div">

    <div class="input-field">
        <label>Department: </label>
        <select name="department" id="department" required>
            <option disabled selected>Select Department</option>
            <option value="civil">Civil</option>
            <option value="computer">Computer</option>
            <option value="textile">Textile</option>
            <option value="electric">Electric</option>
        </select>
    </div>

    <div class="input-field">
        <label>Semester: </label>
        <select name="semester" id="semester" onchange="populateSubjects()" required>
            <option disabled selected>Select Semester</option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
            <option value="5th">5th</option>
            <option value="6th">6th</option>
            <option value="7th">7th</option>
        </select>
    </div>

    <div class="input-field">
        <label>Subjects</label>
        <select name="subjects" id="subjects" required>
            <option disabled selected>Select Subject</option>
        </select>
    </div>

    <a class="callback_report" href="#" onclick="getAttendanceReport()">Get Report</a>

    </div>

    <div id="report">
      
    </div>

   </section>

   <script src="./internal_assets/js/attendance.js"></script>

 </body>
</html>