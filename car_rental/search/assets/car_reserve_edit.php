<?php
include('server.php');


$licensePlate = $_POST['licensePlate'];
$pickupTime = $_POST['pickupTime'];
$returnTime = $_POST['returnTime'];
$userID = $_POST['User_ID'];
$total_price = $_POST['total_price'];

$sql = "SELECT Card_ID FROM customer WHERE User_ID = '$userID'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $cardID = $row['Card_ID'];

    $sql = "INSERT INTO reservation_details (Pickup_date, Return_date, Card_ID, License_plate)
            VALUES ('$pickupTime', '$returnTime', '$cardID', '$licensePlate')";

    if (mysqli_query($conn, $sql)) {

        $sql = "SELECT Book_ID FROM reservation_details 
                 WHERE Pickup_date = '$pickupTime' AND License_plate = '$licensePlate' 
                 AND Return_date = '$returnTime' AND Card_ID = '$cardID'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $bookID = $row['Book_ID'];


            $sql = "INSERT INTO bill (Total_Amount, Book_ID, Card_ID)
                    VALUES ('$total_price', '$bookID', '$cardID')";

            if (mysqli_query($conn, $sql)) {

                header("Location: /test/reserve");
                exit();
            }
        }
    }
}


header("Location: error_page.php");
exit();
?>