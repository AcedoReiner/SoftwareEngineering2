<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/style-1.css">
    <title>Lab Utilization</title>
</head>
<body>
    <main id="main-container">
        <!--main-headbar-->
        <div id="main-headbar" class="headbar">
            <div class="website-title">
                <img src="images/wmsu_logo.png" alt="">
                <h3>Computer Reservation</h3>
            </div>

            <!--Nothing here yet. dont mind-->
            <div class="user-buttons">
                <div class="user-button">
                    <a href="#"><img src="images/user_logo.png" alt=""></a>
                </div>
                <div class="user-button">
                    <a href="index.php"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>

        <!--main-sidebar-->
        <div id="main-sidebar" class="sidebar">
            <div class="sidebar-links">
                <a href="admin_manage-lab-1.php"><span>Manage Lab</span></a>
                <a href="admin_lab-utilization.php" class="current-page"><span>Lab Utilization</span></a>
                <a href="admin_customer-acc.php"><span>Customer Account</span></a>
            </div>
        </div>

        <!--main-content-->
        <div id="main-content" class="content">
            <div class="cards-wrapper">
                <div class="cards-header">
                    <div class="cards-title">
                        <h3>Choose Lab</h3>
                    </div>

                    <!--Here is a form-->
                    <!--Search-->
                    <form action="">
                        <div class="cards-search">
                            <select id="lab-choice">
                                <option>ICS Computer Lab</option>
                            </select>
                            <a href="#" class="btn-search"><i class="fas fa-search"></i></a>
                        </div>
                    </form>

                </div>

                <!--These are the tab divs that controls what tab-#-content to show-->
                <div class="tabs-wrapper">
                    <div id="tab-1" class="tab-wrapper current-tab">
                        <div class="tab-name">
                            <h4>Timer</h4>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-wrapper">
                        <div class="tab-name">
                            <h4>Walk-in</h4>
                        </div>
                    </div>
                </div>

                <!--Tab content 1-->
                <div id="tab-1-content" class="tab-content-wrapper show">

                    <!--Here is a form-->
                    <!--Another Search-->
                    <form action="">
                        <div class="pc-time-search">
                            <h4>Search for Vacant</h4><input type="time">
                            <a href="#" class="btn-search"><i class="fas fa-search"></i></a>
                        </div>
                    </form>

                    <div class="tab-items-wrapper">
                        <!--This is the output div of PC information-->
                        <div class="tab-item-wrapper">
                            <i class="fas fa-desktop"></i>
                            <p>PC 1</p>

                            <div class="pc-timer">
                                <p>00 : 00 : 00</p>
                            </div>

                            <!--This is just a line div. dont mind-->
                            <div class="info-divider"></div>

                            <div class="tab-item-option">
                                <div class="tab-item-option-button">
                                    <!-- modal-open-# is use to oepn modal of the same ID found below all this tab-contets -->
                                    <button id="modal-open-6" class="modal-open btn-resList"><i class="far fa-clock"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <!--Tab content 2-->
                <div id="tab-2-content" class="tab-content-wrapper">
                    <div class="lab-user-reservation-options">
                        <div class="add-card">
                            <!-- modal-open-# is use to oepn modal of the same ID found below all this tab-contets -->
                            <button id="modal-open-7" class="modal-open btn-add"><i class="fas fa-folder-plus"></i></button>
                        </div>
    
                        <!--Here is a form-->
                        <!--Search-->
                        <form action="">
                            <div class="date-search">
                                <input type="date">
                                <a href="#" class="btn-search"><i class="fas fa-search"></i></a>
                            </div>
                        </form>
    
                    </div>
                    <div class="lab-users-reservations-wrapper">
                        <!--This is the output div of Table-like User Reservation information-->
                        <div class="customer-account-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Res. ID</th>
                                        <th>PC No.</th>
                                        <th>Last Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Theodores Theodoress</td>
                                        <td>
                                            <div class="customer-account-options">
                                                <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>  
        </div>  

        <!--reservation list modal-->
        <div id="modal-open-6-content" class="modal">
            <form action="">
                <div class="modal-content-with-table">
                    <div class="modal-close">X</div>

                    <h3 class="pcnum-header">PC <span>1</span></h3>
                    <div class="modal-search-date">
                        Select a date : <input type="date">
                    </div>
                    <div class="modal-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Res. ID</th>
                                    <th>Lastname</th>
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Theodores Theodoress</td>
                                    <td>12:00am</td>
                                    <td>12:00am</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!--Time Btns. Will we add <form> here?-->
                    <div class="modal-time-btns">
                        <div class="modal-time-btn">
                            <button>+3hr</button>
                        </div>
                        <div class="modal-time-btn">
                            <button>+2hr</button>
                        </div>
                        <div class="modal-time-btn">
                            <button>+1hr</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div id="modal-open-7-content" class="modal">
            <!--Here is a form-->
            <form action="">
                <div class="modal-content">
                    <div class="modal-close">X</div>
                    <h3>Walk-in Reservation Form</h3>
                    <input type="text" placeholder="Last name" required>
                    <span>PC Number</span>
                    <select>
                        <option value="">PC 1</option>
                        <option value="">PC 2</option>
                        <option value="">PC 3</option>
                        <option value="">PC 4</option>
                        <option value="">PC 5</option>
                    </select>
                    <span>From</span>
                    <select>
                        <option value="">8:00am</option>
                        <option value="">9:00am</option>
                        <option value="">10:00am</option>
                        <option value="">11:00am</option>
                        <option value="">12:00nn</option>
                        <option value="">1:00pm</option>
                        <option value="">2:00pm</option>
                        <option value="">3:00pm</option>
                        <option value="">4:00pm</option>
                    </select>
                    <span>to</span>
                    <select>
                        <option value="">8:00am</option>
                        <option value="">9:00am</option>
                        <option value="">10:00am</option>
                        <option value="">11:00am</option>
                        <option value="">12:00nn</option>
                        <option value="">1:00pm</option>
                        <option value="">2:00pm</option>
                        <option value="">3:00pm</option>
                        <option value="">4:00pm</option>
                        <option value="">5:00pm</option>
                    </select>
                    <button class="modal-open btn-add">Submit</button>
                </div>
            </form>
        </div>
    </main>

    <script src="main.js"></script>
</body>
</html>