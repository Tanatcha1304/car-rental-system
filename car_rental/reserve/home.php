<?php
include('../assets/login_require.php');
include('../assets/db/server.php');

$User_ID = $_SESSION['login_userid'];
$sqlSelect = "SELECT * FROM reservation_details WHERE Card_ID = (
    SELECT Card_ID FROM customer WHERE User_ID = '$User_ID'
)";
$result = mysqli_query($conn, $sqlSelect);
?>

<body>
    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            background-position: center;
            background-attachment: fixed;
            background-color: #FAFAFC;
        }

        form {
            text-align: center;
        }

        .indented {
            padding-left: 100px;
        }
    </style>
    <br><br>
    <div class="indented">
        <h1 style="color:#406A8D; font-weight: 500; font-size: 30px; ">RESERVATION</h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <title>Reservation</title>
            <thead>
                <tr>
                    <th>Book ID</th>
                    <th>Reservation Date</th>
                    <th>Pickup Date</th>
                    <th>Return Date</th>
                    <th>Booking Status</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $data['Book_ID']; ?></td>
                        <td><?php echo $data['Reserve_Date']; ?></td>
                        <td><?php echo $data['Pickup_Date']; ?></td>
                        <td><?php echo $data['Return_Date']; ?></td>
                        <td><?php echo $data['Book_Status']; ?></td>
                        <td>
                            <a href="index.php?page=payment&Book_ID=<?php echo $data['Book_ID']; ?>" class="btn btn-primary">Payment</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>
