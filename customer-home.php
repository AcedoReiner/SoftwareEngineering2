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
    <title>Home</title>
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
                <a href="customer-home.php" class="customer-current-page"><span>Make Reservation</span></a>
                <a href="customer-transactions.php"><span>My Reservations</span></a>
            </div>
        </div>

        <div id="customer-main-content" class="customer-content">
            <div class="customer-cards-wrapper">
                <div class="customer-cards-header">
                    <div class="customer-cards-title">
                        <h3>Choose Lab</h3>
                    </div>

                    <!--Here is a form-->
                    <!--Search-->
                    <form action="">
                        <div class="customer-cards-search">
                            <select id="lab-choice">
                                <option>ICS Computer Lab</option>
                            </select>
                            <a href="#" class="btn-search"><i class="fas fa-search"></i></a>
                        </div>
                    </form>
                </div>

                <div class="computers-wrapper">
                    <div class="computer-wrapper">
                        <i class="fas fa-desktop"></i>
                        <p>PC 1</p>
                        <button id="modal-open-10" class="modal-open btn-reserve">Reserve</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-open-10-content" class="modal">
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

                    <div class="search-computer-vacant-items">
                        <div class="search-computer-vacant-item">
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
                            </select>
                        </div>
                        <div class="search-computer-vacant-item">
                            <button class="btn-reserve">Reserve</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script src="main.js"></script>
</body>
</html>