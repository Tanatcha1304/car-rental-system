<?php
include('server.php');

if (isset($_POST['delete_btn'])) {
    $licensePlate = $_POST['delete_license'];

    $imageQuery = "SELECT Veh_Image FROM vehicle WHERE License_plate = '$licensePlate'";
    $imageResult = mysqli_query($conn, $imageQuery);
    $imageRow = mysqli_fetch_assoc($imageResult);
    $vehImage = $imageRow['Veh_Image'];

    // Check the image 
    $imageCountQuery = "SELECT COUNT(*) AS count FROM vehicle WHERE Veh_Image = '$vehImage'";
    $imageCountResult = mysqli_query($conn, $imageCountQuery);
    $imageCountRow = mysqli_fetch_assoc($imageCountResult);
    $imageCount = $imageCountRow['count'];

    if ($imageCount == 1) {
        $imageToDelete = "../assets/upload/" . $vehImage;
        if (file_exists($imageToDelete)) {
            unlink($imageToDelete);
        }
    }

    // Delete the row 
    $deleteQuery = "DELETE FROM vehicle WHERE License_plate = '$licensePlate'";
    $deleteResult = mysqli_query($conn, $deleteQuery);


    if ($deleteResult) {
        $_SESSION['SUCCESS'] = "Row deleted successfully.";
    } else {
        $_SESSION['FAIL'] = "Failed to delete the row.";
    }

    header("Location: ../index.php");
    exit();
}
?>
