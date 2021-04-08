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
    <title>Manage Lab</title>
</head>
<body>
    <main id="main-container">
        <!--main-headbar-->
        <div id="main-headbar" class="headbar">
            <div class="website-title">
                <img src="images/wmsu_logo.png" alt="">
                <h3>Computer Reservation</h3>
            </div>
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
                <a href="admin_manage-lab-1.php" class="current-page"><span>Manage Lab</span></a>
                <a href="admin_lab-utilization.php"><span>Lab Utilization</span></a>
                <a href="admin_customer-acc.php"><span>Customer Account</span></a>
            </div>
        </div>

        <!--main-content-->
        <div id="main-content" class="content">
            <div class="cards-wrapper">
                <div class="cards-header">
                    <div class="cards-title">
                        <h3>ICS Computer Lab</h3>
                    </div>

                    <!--Here is a form-->
                    <!--Search-->
                    <form action="">
                        <div class="cards-search">
                            <input type="text" placeholder="Search">
                            <a href="#" class="btn-search"><i class="fas fa-search"></i></a>
                        </div>
                    </form>

                </div>

                <!--These are the tab divs that controls what tab-#-content to show-->
                <div class="tabs-wrapper">
                    <div id="tab-1" class="tab-wrapper current-tab">
                        <div class="tab-name">
                            <h4>Computers</h4>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-wrapper">
                        <div class="tab-name">
                            <h4>Employees</h4>
                        </div>
                    </div>
                </div>

                <!--Tab content 1-->
                <div id="tab-1-content" class="tab-content-wrapper show">
                    <div class="tab-buttons">
                        <div class="add-card">
                            <!-- modal-open-# is use to oepn modal of the same ID found below all this tab-contets -->
                            <button id="modal-open-3" class="modal-open btn-add"><i class="fas fa-folder-plus"></i></button>
                        </div>
                    </div>

                    <div class="tab-items-wrapper">
                        <div class="tab-item-wrapper">
                            <i class="fas fa-desktop"></i>
                            <p>PC 1</p>

                            <div class="info-divider"></div>

                            <div class="tab-item-option">
                                <div class="tab-item-option-button">
                                    <div class="btn-toggle active" onclick="this.classList.toggle('active')">
                                        <div class="inner-circle"></div>  
                                    </div>
                                </div>
                                <div class="tab-item-option-button">
                                    <!--Should we add a <form> here?-->
                                    <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <!--Tab content 2-->
                <div id="tab-2-content" class="tab-content-wrapper">
                    <div class="tab-buttons">
                        <div class="add-card">
                            <button id="modal-open-4" class="modal-open btn-add"><i class="fas fa-folder-plus"></i></button>
                        </div>
                    </div>
                    <div class="tab-items-wrapper">     
                        <div class="tab-item-wrapper">
                            <img src="images/user_logo.png" alt="">
                            <p>Juan Dela Cruz</p>
                            <p>Lab Admin</p>

                            <div class="info-divider"></div>

                            <div class="tab-item-option">
                                <div class="tab-item-option-button">
                                    <!-- modal-open-# is use to oepn modal of the same ID found below all this tab-contets -->
                                    <button id="modal-open-5" class="modal-open btn-edit"><i class="far fa-edit"></i></button>
                                </div>
                                <div class="tab-item-option-button">
                                    <!--Should we add a <form> here?-->
                                    <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    

        <!--Modals-->
        <!--add pc modal-->
        <div id="modal-open-3-content" class="modal">
            <!--Here is a form-->
            <form action="">
                <div class="modal-content">
                    <div class="modal-close">X</div>
                    <h3>New Computer</h3>
                    <input type="text" placeholder="PC number">
                    <button class="btn-add">Submit</button>
                </div>
            </form>
        </div>

        <!--add emp modal-->
        <div id="modal-open-4-content" class="modal">
            <!--Here is a form-->
            <form action="">
                <div class="modal-content">
                    <div class="modal-close">X</div>
                    <h3>New Employee</h3>
                    <input type="text" placeholder="Enter fullname">
                    <select id="lab-emp-type">
                        <option value="lab-admin">Lab Admin</option>
                        <option value="lab-clerk">Lab Clerk</option>
                    </select>
                    <button class="btn-add">Submit</button>
                </div>
            </form>
        </div>

        <!--edit emp modal-->
        <div id="modal-open-5-content" class="modal">
            <!--Here is a form-->
            <form action="">
                <div class="modal-content">
                    <div class="modal-close">X</div>
                    <h3>Edit Employee Information</h3>
                    <input type="text" placeholder="Enter fullname">
                    <select id="lab-emp-type">
                        <option value="lab-admin">Lab Admin</option>
                        <option value="lab-clerk">Lab Clerk</option>
                    </select>
                    <button class="btn-edit">Submit</button>
                </div>
            </form>
        </div>
    </main>

    <script src="main.js"></script>
</body>
</html>