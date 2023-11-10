<?php
include('server.php');

if(isset($_POST['edit_btn'])) {
    $licensePlate = $_POST['License_plate'];
    
    $query = "SELECT * FROM vehicle WHERE License_plate = '$licensePlate'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_assoc($query_run);

        $brand = $_POST['Brand'];
        $model = $_POST['Model'];
        $color = $_POST['Color'];
        $carType = $_POST['Car_Type'];
        $vehicleStatus = $_POST['Vehicle_status'];
        $meterReading = $_POST['Meter_reading'];
        $price = $_POST['Price'];
        $petrolTypes = $_POST['Petrol_types'];
        $seat = $_POST['Seat'];
        $maxSpeed = $_POST['MaxSpeed'];


        if(!empty($brand) && $brand != $row['Brand']) {
            $query = "UPDATE vehicle SET Brand = '$brand' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
        
        if(!empty($model) && $model != $row['Model']) {
            $query = "UPDATE vehicle SET Model = '$model' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
        
        if(!empty($color) && $color != $row['Color']) {
            $query = "UPDATE vehicle SET Color = '$color' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
        
        if(!empty($carType) && $carType != $row['Car_Type']) {
            $query = "UPDATE vehicle SET Car_Type = '$carType' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
        
        if(!empty($vehicleStatus) && $vehicleStatus != $row['Vehicle_status']) {
            $query = "UPDATE vehicle SET Vehicle_status = '$vehicleStatus' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
        
        if(!empty($meterReading) && $meterReading != $row['Meter_reading']) {
            $query = "UPDATE vehicle SET Meter_reading = '$meterReading' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
        
        if(!empty($price) && $price != $row['Price']) {
            $query = "UPDATE vehicle SET Price = '$price' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
        
        if(!empty($petrolTypes) && $petrolTypes != $row['Petrol_types']) {
            $query = "UPDATE vehicle SET Petrol_types = '$petrolTypes' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
        
        if(!empty($_FILES['Veh_image']['name'])) {
            $oldImage = $row['Veh_Image'];
            $query = "SELECT COUNT(*) AS count FROM vehicle WHERE Veh_Image = '$oldImage' AND License_plate != '$licensePlate'";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);
            $count = $data['count'];
            
            if($count == 0) {
                $oldImagePath = "upload/" . $oldImage;
                if(file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            
            $newImage = $_FILES['Veh_image']['name'];
            $tmpName = $_FILES['Veh_image']['tmp_name'];
            $uploadPath = "upload/$newImage";
            move_uploaded_file($tmpName, $uploadPath);
            
            $query = "UPDATE vehicle SET Veh_Image = '$newImage' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
        
        if(!empty($seat) && $seat != $row['Seat']) {
            $query = "UPDATE vehicle SET Seat = '$seat' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
        
        if(!empty($maxSpeed) && $maxSpeed != $row['MaxSpeed']) {
            $query = "UPDATE vehicle SET MaxSpeed = '$maxSpeed' WHERE License_plate = '$licensePlate'";
            mysqli_query($conn, $query);
        }
    }
}

header("Location: ../index.php"); 
?>
