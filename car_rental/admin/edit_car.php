<style>
    #status.form-select.rounded-pill {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 15px;
        line-height: 18px;
        color: #000000;
        box-sizing: border-box;
        position: absolute;
        width: 380px;
        height: 40px;
        background: #F5F5F5;
        border: 2px solid #406A8D;
        border-radius: 50px;
        text-align: center;
    }
</style>


<body style="background-color:#FAFAFC;">
    <div class="container-fluid">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/add_car.css" />

        <div class="box">
            <!-- HEAD -->
            <div class="head">
                <p style="color: #406A8D; "> EDIT CARS </p>
            </div>

            <!-- form -->
            <div class="formhead">
                <p style="position: absolute; left: 143px; top: 182px;"> License plate </p>
                <p style="position: absolute; left: 143px; top: 270px;"> Brand </p>
                <p style="position: absolute; left: 143px; top: 358px;"> Model </p>
                <p style="position: absolute; left: 144px; top: 446px;"> Color </p>
                <p style="position: absolute; left: 359px; top: 446px;"> Car type </p>
                <p style="position: absolute; left: 144px; top: 622px;"> Status</p>

                <p style="position: absolute; left: 685px; top: 182px;"> Meter reading </p>
                <p style="position: absolute; left: 685px; top: 270px;"> Price </p>
                <p style="position: absolute; left: 685px; top: 358px;"> Petro type </p>
                <p style="position: absolute; left: 685px; top: 446px;"> Image (jpeg,jpg) </p>
                <p style="position: absolute; left: 685px; top: 534px;"> Seats </p>
                <p style="position: absolute; left: 901px; top: 534px;"> Max speed </p>
            </div>


            <?php
            include('assets/server.php');

            $id = $_GET['id'];
            $query = "SELECT * FROM vehicle WHERE License_plate = '$id' ";
            $query_run = mysqli_query($conn, $query);


            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {
                    ?>
                    <form action="assets/edit_car.php" method="POST" enctype="multipart/form-data">


                        <input type="text" name="License_plate" id="lp" style="left: 163px; top: 215px;"
                            value="<?php echo $row["License_plate"]; ?>" /> <!-- License plate box -->
                        <input type="text" name="Brand" id="brand" style="left: 163px; top: 303px;"
                            value="<?php echo $row["Brand"]; ?>" /> <!-- Brand box -->
                        <input type="text" name="Model" id="model" style="left: 163px; top: 391px;"
                            value="<?php echo $row["Model"]; ?>" /> <!-- Model box -->
                        <input type="text" name="Color" id="color" style="left: 162px; top: 479px;"
                            value="<?php echo $row["Color"]; ?>" /> <!-- Color box -->
                        <select class="form-select rounded-pill" name="Car_Type" id="cartype" style="left: 379px; top: 479px;">
                            <!-- Car types box -->
                            <option value="coupe" <?php if ($row["Car_Type"] == "coupe") {
                                echo "selected";
                            } ?>>Coupe</option>
                            <option value="hatchback" <?php if ($row["Car_Type"] == "hatchback") {
                                echo "selected";
                            } ?>>Hatchback
                            </option>
                            <option value="sedan" <?php if ($row["Car_Type"] == "sedan") {
                                echo "selected";
                            } ?>>Sedan</option>
                            <option value="suv" <?php if ($row["Car_Type"] == "suv") {
                                echo "selected";
                            } ?>>SUV</option>
                            <option value="van" <?php if ($row["Car_Type"] == "van") {
                                echo "selected";
                            } ?>>VAN</option>
                        </select>
                        <select class="form-select rounded-pill" name="Vehicle_status" id="status"
                            style="left:162px; top: 655px;"><!-- Status box-->
                            <option value="Available" <?php if ($row["Vehicle_status"] == "Available") {
                                echo "selected";
                            } ?>>
                                Available</option>
                            <option value="Unavailable" <?php if ($row["Vehicle_status"] == "Unavailable") {
                                echo "selected";
                            } ?>>
                                Unavailable</option>
                        </select>

                        <input type="number" name="Meter_reading" id="mr" style="left: 703px; top: 215px;"
                            value="<?php echo $row["Meter_reading"]; ?>"> <!-- Meter reading box -->
                        <input type="number" name="Price" id="price" style="left: 703px; top: 303px;"
                            value="<?php echo $row["Price"]; ?>"> <!-- Price box -->
                        <input type="text" name="Petrol_types" id="petro" style="left: 703px; top: 391px;"
                            value="<?php echo $row["Petrol_types"]; ?>"> <!-- Petro type box -->
                        <div class="input-group mb-3" style="width: 380px; left: 687px; top: 390px;"> <!-- Image -->
                            <img src="<?php echo "assets/upload/" . $row['Veh_Image']; ?>" width="50 px">
                            <input type="file" name="Veh_image" class="form-control" id="inputGroupFile02">
                            <input type="hidden" name="Veh_image_old" value="<?php echo $row['Veh_Image']; ?>">
                        </div>
                        <br>
                        <input type="number" name="Seat" id="seats" style="left: 703px; top: 567px;"
                            value="<?php echo $row["Seat"]; ?>"> <!-- Seats box -->
                        <input type="number" name="MaxSpeed" id="maxspeed" style="left: 921px; top: 567px;"
                            value="<?php echo $row["MaxSpeed"]; ?>"> <!-- Max speed box -->



                        <!-- submit button -->
                        <div class="submit">
                            <button type="submit" name="edit_btn" value="SUBMIT" id="submit">EDIT</button>
                        </div>

                    </form>
                    <?php
                }
            } else {
                echo "No record Available";
            }
            ?>

        </div>
    </div>
</body>

</html>