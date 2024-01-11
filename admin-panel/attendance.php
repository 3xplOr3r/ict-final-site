<?php 
    require_once ('../includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./internal_assets/css/attendance.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  </head>
  <body>
    <nav class="sidebar">
      <a href="#" class="logo">Dashboard</a>

      <div class="menu-content">
        <ul class="menu-items">
          <div class="menu-title">Your menu title</div>

          <li class="item">
            <a href="#">Your first link</a>
          </li>

          <li class="item">
            <div class="submenu-item">
              <span>First submenu</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Your submenu title
              </div>
              <li class="item">
                <a href="#">First sublink</a>
              </li>
              <li class="item">
                <a href="#">First sublink</a>
              </li>
              <li class="item">
                <a href="#">First sublink</a>
              </li>
            </ul>
          </li>
          <li class="item">
            <div class="submenu-item">
              <span>Second submenu</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Your submenu title
              </div>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
              <li class="item">
                <a href="#">Second sublink</a>
              </li>
            </ul>
          </li>

          <li class="item">
            <a href="#">Your second link</a>
          </li>

          <li class="item">
            <a href="#">Your third link</a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="main">
    <div class="div">

    <div class="input-field">
        <label>Department: </label>
        <select name="department" id="department" required>
            <option disabled selected>Select Department</option>
            <option>Civil</option>
            <option>Computer</option>
            <option>Textile</option>
            <option>Electric</option>
        </select>
    </div>

    <div class="input-field">
        <label>Semester: </label>
        <select name="semester" id="semester" required>
            <option disabled selected>Select Semester</option>
            <option>1st</option>
            <option>2nd</option>
            <option>3rd</option>
            <option>4th</option>
            <option>5th</option>
            <option>6th</option>
            <option>7th</option>
        </select>
    </div>

    <div class="input-field">
        <label>Subjects</label>
        <select name="subjects" id="subjects" required>
            <option disabled selected>Select Subject</option>
            <option>Math</option>
            <option>English</option>
            <option>Programing</option>
        </select>
    </div>

    <a class="callback_report" href="#">Get Report</a>

    </div>

    <div id="report"></div>

    </main>

    <script src="./internal_assets/js/attendance.js"></script>
  </body>
</html>