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

    
    <title>My Reservations</title>
</head>
<body>
    <main id="customer-main-container">
         <!--customer main-headbar-->
        <div id="customer-main-headbar" class="customer-headbar">
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

        <!--customer main-navbar-->
        <div id="customer-main-navbar" class="navbar">
            <div class="navbar-links">
                <a href="customer-home.php"><span>Make Reservation</span></a>
                <a href="customer-transactions.php" class="customer-current-page"><span>My Reservations</span></a>
            </div>
        </div>

        <div id="customer-main-content" class="customer-content">
            <div class="customer-cards-wrapper">
                <div class="customer-cards-header">
                    <div class="customer-cards-title">
                        <h3>My Reservations</h3>
                    </div>
                </div>

                <div class="customer-reservations-wrapper">
                    <!--This is the output div of customer information-->
                    <div class="customer-account-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Res. ID</th>
                                    <th>PC No.</th>
                                    <th>Date</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>12/12/21</td>
                                    <td>12:00nn</td>
                                    <td>12:00nn</td>
                                    <td>
                                        <div class="customer-account-options">
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
    </main>

    <script src="main.js"></script>
</body>
</html>