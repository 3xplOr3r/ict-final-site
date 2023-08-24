<?php 

    include('headertwo.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon/">
    <link rel="stylesheet" href="studentportal.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>ICT-Institute Of Comunication technology</title>
</head>
<body>
        <div class="parent-container">
            <div class="all" style="display: none">
                <div class="spinner-square">
                    <div class="square-1 square"></div>
                    <div class="square-2 square"></div>
                    <div class="square-3 square"></div>
                </div>
            </div>
            <div class="sidebar">
        
                <ul>
        
        
                    <li>
                        <a href="dashboard.php">Dashboard</a>
                    </li>
        
                    <li>
                        <a href="notices.php">Notices</a>
                    </li>
        
                    <li>
                        <a href="routines.php">Class Routines</a>
                    </li>
        
                    <li>
                        <a href="attendance.php">Attendances</a>
                    </li>
        
                    <li>
                        <a href="lectures.php">Lectures</a>
                    </li>
        
                    <li>
                        <a href="topics.php">Important Topics</a>
                    </li>
        
                    <li>
                        <a href="results.php">Check Results</a>
                    </li>
        
        
                </ul>
            </div>

            <div class="wrapper">
                <div class="header">
                    <ul>
                        <li class="active form_1_progressbar">
                            <div>
                                <p>1</p>
                            </div>
                        </li>
                        <li class="form_2_progressbar">
                            <div>
                                <p>2</p>
                            </div>
                        </li>
                        <li class="form_3_progressbar">
                            <div>
                                <p>3</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="form_wrap">
                    <div class="form_1 data_info">
                        <h2>Routine on your hand!</h2>
                        <form>
                            <div class="form_container">
                                <div class="input_wrap">
                                    <p>Easy and hassle free way to get you exam routine. Just follow some simple steps!</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form_2 data_info" style="display: none;">
                        <h2>Type of routine</h2>
                        <form>
                            <div class="form_container">
                                <div class="input_wrap">
                                    <div class="radio_btn">
                                        <div class="alignment">
                                            <input type="radio" id="regular" name="routine_type" value="regular">
                                            <span></span>
                                            <label for="regular">Regular</label>
                                        </div>
                                        <div class="alignment">
                                            <input type="radio" id="referred" name="routine_type" value="referred">
                                            <span></span>
                                            <label for="referred">Referred</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form_3 data_info" style="display: none;">
                        <h2>Department & Regulation</h2>
                        <form>
                            <div class="form_container">
                                <div class="input_wrap">
                                    <label for="department">Department Name</label>
                                    <input type="text" name="Dipertment Name" class="input" id="compny">
                                </div>
                                <div class="input_wrap">
                                    <label for="session">Regulation</label>
                                    <input type="text" name="regulation" class="input" id="experience">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form_4 data_info" style="display: none;">
                        <h2>Enter Subject Codes</h2>
                        <form>
                            <div class="form_container">
                                <div class="input_wrap">
                                    <label for="subjects">Subject Codes</label>
                                    <input type="text" name="SubjectCodes" class="input" id="subcodes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="btns_wrap">
                    <div class="common_btns form_1_btns">
                        <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_2_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                        <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_3_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                        <button type="button" class="btn_done">Done</button>
                    </div>
                    <div class="common_btns form_4_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                        <button type="button" class="btn_done">Done</button>
                    </div>
                </div>
            </div>

        </div>

        <script src="../assets/js/routinepage.js"></script>

</body>
</html>