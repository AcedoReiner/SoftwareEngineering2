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
    <title>Customer Accounts</title>
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
                <a href="admin_manage-lab-1.php"><span>Manage Lab</span></a>
                <a href="admin_lab-utilization.php"><span>Lab Utilization</span></a>
                <a href="admin_customer-acc.php"  class="current-page"><span>Customer Account</span></a>
            </div>
        </div>

        <!--main-content-->
        <div id="main-content" class="content">
            <div class="cards-wrapper">
                <div class="cards-title">
                    <h3>Customer Accounts</h3>
                </div>
                <div class="customer-acc-options">
                    <div class="add-customer">
                        <!-- modal-open-# is use to oepn modal of the same ID found below all this tab-contets -->
                        <button id="modal-open-8" class="modal-open btn-add"><i class="fas fa-folder-plus"></i></button>
                    </div>

                    <!--Here is a form-->
                    <!--Search-->
                    <form action="">
                        <div class="customer-search">
                            <input type="text" placeholder="Search">
                            <a href="#" class="btn-search"><i class="fas fa-search"></i></a>
                        </div>
                    </form>

                </div>
                <div class="customer-accounts-wrapper">
                    <!--This is the output div of customer information-->
                    <div class="customer-account-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Juan Dela Cruz</td>
                                    <td>
                                        <div class="customer-account-options">
                                            <button  id="modal-open-9" class="modal-open btn-edit"><i class="far fa-eye"></i></i></button>
                                            <!--Should we add a <form> here?-->
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

        <!--Modals-->
        <!--add customer modal-->
        <div id="modal-open-8-content" class="modal">
            <form action="">
                <div class="modal-content">
                    <div class="modal-close">X</div>
                    <h3>New Customer</h3>
                    <input type="text" placeholder="Enter firstname" required>
                    <input type="text" placeholder="Enter lastname" required>
                    <input type="text" placeholder="Enter username" required>
                    <input type="text" placeholder="Enter password" required>
                    <input type="email" placeholder="Enter email" required>
                    <button class="btn-add">Submit</button>
                </div>
            </form>
        </div>

        <!--edit customer modal-->
        <div id="modal-open-9-content" class="modal">
            <form action="">
                <div class="modal-content">
                    <div class="modal-close">X</div>
                    <h3>View & Edit Customer Information</h3>
                    <input type="text" placeholder="Enter firstname" required>
                    <input type="text" placeholder="Enter lastname" required>
                    <input type="text" placeholder="Enter username" required>
                    <input type="text" placeholder="Enter password" required>
                    <input type="email" placeholder="Enter email" required>
                    <button class="btn-edit">Save</button>
                </div>
            </form>
    </main>

    <script src="main.js"></script>
</body>
</html>