<?php
include('server.php');

if(isset($_POST['save_btn'])) {
    $licensePlate = $_POST['License_plate'];
    $brand = $_POST['Brand'];
    $model = $_POST['Model'];
    $color = $_POST['Color'];
    $carType = $_POST['Car_Type'];
    $vehicleStatus = $_POST['Vehicle_status'];
    $meterReading = $_POST['Meter_reading'];
    $price = $_POST['Price'];
    $petrolTypes = $_POST['Petrol_types'];
    $seats = $_POST['Seat'];
    $maxSpeed = $_POST['MaxSpeed'];

    $file = $_FILES['Veh_image'];
    $fileName = $file['name'];
    $fileTmpPath = $file['tmp_name'];
    $fileType = $file['type'];
    $uploadDirectory = 'upload/'; 
    $targetFilePath = $uploadDirectory . $fileName;
    
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }
    

    if (move_uploaded_file($fileTmpPath, $targetFilePath)) {


        $stmt = $conn->prepare("INSERT INTO vehicle (License_plate, Brand, Model, Color, Car_Type, Vehicle_status, Meter_reading, Price, Petrol_types, Seat, MaxSpeed, Veh_image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssddssss", $licensePlate, $brand, $model, $color, $carType, $vehicleStatus, $meterReading, $price, $petrolTypes, $seats, $maxSpeed, $fileName);
        if ($stmt->execute()) {
            $_SESSION['success'] = "Car added successfully.";
            header("Location: ../index.php?page=add_car");
            exit();
        } else {
            $_SESSION['error'] = "Car addition failed. Please try again.";
            echo $_SESSION['error'];
            header("Location: ../index.php?page=add_car"); 
            exit();
        }
    } else {
        $_SESSION['error'] = "File upload failed. Please try again.";
        echo $_SESSION['error'];
        header("Location: ../index.php?page=add_car"); 
        exit();
    }
 
} else {
    header("Location: ../index.php?page=add_car");
    exit();
}
?>
