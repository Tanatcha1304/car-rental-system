<?php
include('addnew/server.php');
$licensePlate = 'ก111';
$query = "SELECT Veh_image FROM vehicle WHERE License_plate = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $licensePlate);
$stmt->execute();

$stmt->bind_result($vehImage);

if ($stmt->fetch()) {
    echo $vehImage;
} else {
    echo "Image not found for license plate: " . $licensePlate;
}

$stmt->close();
$conn->close();
?>
