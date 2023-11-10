<?php
include('../../assets/db/server.php');
$id = $_GET['Book_ID'];
$currentDateTime = date('Y-m-d H:i:s');

$sqlUpdateBill = "UPDATE bill SET Bill_Status = 'Paid', Pay_Date = '$currentDateTime' WHERE Book_ID = $id";
$resultBill = mysqli_query($conn, $sqlUpdateBill);

$sqlUpdateReservation = "UPDATE reservation_details SET Book_Status = 'Reserved' WHERE Book_ID = $id";
$resultReservation = mysqli_query($conn, $sqlUpdateReservation);

if ($resultBill && $resultReservation) {
    echo "Update successful";
    header('Location: ../');
} else {
    echo "Error updating record: " . mysqli_error($conn);
    header('Location: ../');
}

mysqli_close($conn);
?>
