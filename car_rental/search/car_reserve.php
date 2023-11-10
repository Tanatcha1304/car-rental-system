<?php
include('../assets/login_require.php');
include('../assets/db/server.php');
$licensePlate = $_GET['License_plate'];
$pickupTime = $_GET['Pickup_time'];
$returnTime = $_GET['Return_time'];
$_SESSION['licensePlate']=$licensePlate ;
$_SESSION['Pickup_time'] = $pickupTime;
$_SESSION['Return_time'] = $returnTime;

$pickupTimestamp = strtotime($pickupTime);
$returnTimestamp = strtotime($returnTime);
$dayGap = floor(($returnTimestamp - $pickupTimestamp) / (60 * 60 * 24));


$sql = "SELECT * FROM vehicle WHERE License_plate = '$licensePlate'";
$result = mysqli_query($conn, $sql);
$userID=$_COOKIE['login_userID'];
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
$total_price = $row['Price'] * $dayGap;
?>

<body style="background-color:#FAFAFC;">
    <div class="container-fluid">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/car_reserve.css" />
        <!-- Model -->
        <div class="head">
            <p style="color: #406A8D; ">
                <?php echo $row['Model'] ?>
            </p>
            <p style="font-size: 20px; font-weight: 400; line-height: 24px; margin-top: -3%; color: #7B7B7B;">
                <?php echo $row['Color'] ?>
            </p>
        </div>

        <div class="box" style="background-image: url('../admin/assets/upload/<?php echo $row['Veh_Image'] ?>');"></div>

        <!-- right box1 -->
        <div class="box1">
            <p style="color: #406A8D; margin-top: 5%; margin-left: 7%; font-size: 20px;"> การรับและคืนรถ </p>
            <!-- pick up -->
            <div class="dot1"> </div>
            <p style="color: black; margin-left: 15%; margin-top : -3%; width: 150px;">
                <?php echo $_SESSION['Pickup_time'] ?>
            </p>
            <p style="color: black; margin-left: 23%; margin-top : -3%; width: 300px;"> Bangkok Thailand </p>
            <p style="color: #406A8D; margin-left: 23%; margin-top : -3%; width: 300px;"> Beside Terminal21 Asoke</p>

            <div class="stline"> </div>

            <!-- return -->
            <div class="dot2"> </div>
            <p style="color: black; margin-left: 15%; margin-top :-3%; width: 150px;">
                <?php echo $_SESSION['Return_time'] ?>
            </p>
            <p style="color: black; margin-left: 23%; margin-top : -3%; width: 300px;"> Bangkok Thailand </p>
            <p style="color: #406A8D; margin-left: 23%; margin-top : -3%; width: 300px;"> Beside Terminal21 Asoke
                Bangkok </p>


        </div>

        <!-- right box2 -->
        <div class="box2">
            <p style="color: #406A8D; margin-top: 5%; margin-left: 7%; font-size: 20px;"> รายละเอียดราคารถ </p>
            <p style="color: black; margin-left: 7%; margin-top : 10%; width: 300px;"> ค่าเช่า </p>
            <p style="color: black; margin-left: 75%; margin-top : -8%; width: 300px;">
                <?php echo $total_price ?> บาท
            </p>
            <p style="color: black; margin-left: 7%; margin-top : 6%; width: 300px;"> ค่าบริการรับรถ </p>
            <p style="color: #406A8D; margin-left: 86.5%; margin-top : -8%; width: 300px;"> ฟรี </p>

            <!-- confirm button -->
            <div class="confirm">
            <form action="assets/car_reserve_edit.php" method="POST">
            <input type="hidden" name="licensePlate" value="<?php echo $licensePlate; ?>">
            <input type="hidden" name="pickupTime" value="<?php echo $pickupTime; ?>">
            <input type="hidden" name="returnTime" value="<?php echo $returnTime; ?>">
            <input type="hidden" name="User_ID" value="<?php echo $userID; ?>">
            <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">

                    <input type="submit" value="ยืนยันการจอง" id="confirm" style="position: absolute; width: 83%; height: 40px;
                background: #406A8D; border-radius: 5px; color: #FFFFFF; font-size: 20px;">
                </form>
            </div>

        </div>

        <!-- details box -->
        <div class="details">
            <p style="color: #406A8D; margin-top: 4.5%; margin-left: 9%;"> ความเร็วสูงสุด </p>
            <p style="color: black; margin-top: -6%; margin-left: 75.5%;">
                <?php echo $row['MaxSpeed'] ?>
            </p>
            <p style="color: #406A8D; margin-top: 8%; margin-left: 9%;"> ประเภท </p>
            <p style="color: black; margin-top: -6.5%; margin-left: 74%;">
                <?php echo $row['Car_Type'] ?>
            </p>
            <p style="color: #406A8D; margin-top: 9%; margin-left: 9%;"> จำนวนผู้โดยสาร </p>
            <p style="color: black; margin-top: -6.5%; margin-left: 78%;">
                <?php echo $row['Seat'] ?>
            </p>
            <div class="line1"> </div>
            <div class="line2"> </div>
            <div class="line3"> </div>
        </div>

    </div>
</body>

</html>