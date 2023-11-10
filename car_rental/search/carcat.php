<?php
include('../assets/db/server.php');
include('../assets/index_header.php');
// include('../assets/login_require.php');
$pickupDate = $_GET['pickup-date'];
$dropoffDate = $_GET['dropoff-date'];
$pickupTime = $_GET['pickup-time'];
$dropoffTime = $_GET['dropoff-time'];

$pickupDateTime = $pickupDate . ' ' . $pickupTime.':00';
$dropoffDateTime = $dropoffDate . ' ' . $dropoffTime.':00';

$sqlSelect = "SELECT License_plate, Brand, Model, Price, Seat, Veh_Image
              FROM vehicle
              WHERE License_plate NOT IN (
                  SELECT License_plate
                  FROM reservation_details
                  WHERE (Pickup_date <= '$pickupDateTime' AND Return_date >= '$pickupDateTime')
                     OR (Pickup_date <= '$dropoffDateTime' AND Return_date >= '$dropoffDateTime')
                     OR (Pickup_date >= '$pickupDateTime' AND Return_date <= '$dropoffDateTime')
              )";

$result = mysqli_query($conn, $sqlSelect);
?>

<head>
    <?php include('../assets/nav.php');?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle List</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin: 0 auto;
            padding: 20px;
            width: 100%;
        
        }

        .box {
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 20px;
            width: 350px;
            height: 250;
            text-align: center;
            font-weight: 600;
            color: #406A8D;
        }

        .box img {
            width: 200px;
            height: auto;
            justify-self: center;
            align-self: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body style="background-color: #FAFAFC;">
<?php
    ?>
     <div class="container d-flex justify-content-center">
        <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <a href="index.php?page=car_reserve&License_plate=<?php echo $row['License_plate']; ?>&Pickup_time=<?php echo urlencode($pickupDateTime); ?>&Return_time=<?php echo urlencode($dropoffDateTime); ?>">
                    <div class="box ">
                        <div class="container pl-4">
                        <div class="row text-left">
                            <div class="col">License Plate: </div>
                            <div class="col"> <?php echo $row['License_plate']; ?></div>
                            <div class="w-100"></div>
                            <div class="col">Brand: </div>
                            <div class="col"> <?php echo $row['Brand']; ?></div>
                            <div class="w-100"></div>
                            <div class="col">Model: </div>
                            <div class="col"> <?php echo $row['Model']; ?></div>
                            <div class="w-100"></div>
                            <div class="col">Price: </div>
                            <div class="col"> <?php echo $row['Price']; ?></div>
                            <div class="w-100"></div>
                            <div class="col">Seat: </div>
                            <div class="col"> <?php echo $row['Seat']; ?></div>
                        </div>
                        </div>
                        
                    </div>
                    <div class="box" style="margin-top:-15%">
                        <img src="../admin/assets/upload/<?php echo $row['Veh_Image']; ?>" alt="Vehicle Image">
                    </div>
                </a>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No available cars found for the selected dates and times.</p>
        <?php endif; ?>
    </div>
</body>


