<?php 

    include('../includes/header.php');

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Dashboard</title>
   <link rel="stylesheet" href="./internal_assets/css/view-attendance.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
 </head>
 <body>

    <section class="att-res">
        <div class="att-table">
        <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Attendance List</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="../img/search.png" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="../img/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="../img/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="../img/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="../img/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Names <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Roll <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Semesters <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Subjects <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Total Present <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Biplob Ahmed </td>
                        <td> 495012 </td>
                        <td> 8th </td>
                        <td> CSE </td>
                        <td> <strong> 29 </strong></td>
                    </tr>
                    <tr>
                        <td> Biplob Ahmed </td>
                        <td> 495012 </td>
                        <td> 8th </td>
                        <td> CSE </td>
                        <td> <strong> 29 </strong></td>
                    </tr>
                    <tr>
                        <td> Biplob Ahmed </td>
                        <td> 495012 </td>
                        <td> 8th </td>
                        <td> CSE </td>
                        <td> <strong> 29 </strong></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
        </div>
        <div class="chart">
        <figure class="highcharts-figure">
            <div id="container"></div>
            <p class="highcharts-description"></p>
        </figure>
        </div>
    </section>

    <script src="./internal_assets/js/view-attendance.js"></script>

 </body>
</html>