<?php
?>
<title>Add Cars</title>
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
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert" role="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <?php
                echo $_SESSION['error'];
                ?>
            </div>
        <?php endif ?>
        <div class="box">
            <!-- HEAD -->
            <div class="head">
                <p style="color: #406A8D; "> ADD CARS </p>
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

            <form action="assets/addcar_db.php" method="POST" enctype="multipart/form-data">

                <input type="text" name="License_plate" id="lp" style="left: 163px; top: 215px;">
                <!-- License plate box -->
                <input type="text" name="Brand" id="brand" style="left: 163px; top: 303px;"> <!-- Brand box -->
                <input type="text" name="Model" id="model" style="left: 163px; top: 391px;"> <!-- Model box -->
                <input type="text" name="Color" id="color" style="left: 162px; top: 479px;"> <!-- Color box -->
                <select class="form-select rounded-pill" name="Car_Type" id="cartype" style="left: 379px; top: 479px;">
                    <!-- Car types box -->
                    <option value="coupe">Coupe</option>
                    <option value="hatchback">Hatchback</option>
                    <option value="sedan">Sedan</option>
                    <option value="suv">SUV</option>
                    <option value="van">VAN</option>
                </select>
                <select class="form-select rounded-pill" name="Vehicle_status" id="status"
                    style="left:162px; top: 655px;"><!-- Status box-->
                    <option value="Available">Available</option>
                    <option value="Unavailable">Unavailable</option>
                </select>

                <input type="number" name="Meter_reading" id="mr" style="left: 703px; top: 215px;">
                <!-- Meter reading box -->
                <input type="number" name="Price" id="price" style="left: 703px; top: 303px;"> <!-- Price box -->
                <input type="text" name="Petrol_types" id="petro" style="left: 703px; top: 391px;">
                <!-- Petro type box -->
                <div class="input-group mb-3" style="width: 380px; left: 687px; top: 390px;"> <!-- Image -->
                    <input type="file" name="Veh_image" accept="image/*" class="form-control" id="inputGroupFile02">
                </div>

                <br>
                <input type="number" name="Seat" id="seats" style="left: 703px; top: 567px;"> <!-- Seats box -->
                <input type="number" name="MaxSpeed" id="maxspeed" style="left: 921px; top: 567px;">
                <!-- Max speed box -->



                <!-- submit button -->
                <div class="submit">
                    <button type="submit" name="save_btn" value="SUBMIT" id="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</body>
