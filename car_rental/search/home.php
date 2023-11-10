<?php include('../assets/login_require.php');?>
<body style="overflow: hidden;">
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <div class="background-image">
        <!-- Search -->
        <br><br><br><br><br><br>
        <h1 style="color:#406A8D; font-weight: 700; font-size: 27px; line-height: 33px; font-style: normal; ">CAR RENTAL
            SEARCH</h1>
        <br>

        <!-- Pick-up location -->
        <form class="pickup-form" action="carcat.php" method="GET">

            <div class="text-border">
                <h6 style="color:#406A8D; font-weight: 600; font-size: 17px;">- CAR PICK-UP LOCATION -</h6>
                <p style="color:#5e5f5f; font-weight: 400; font-size: 17px;">Beside Terminal21 Asoke Bangkok</p>
            </div>
            <br>

            <!-- Pick-up & Drop-off date -->
            <div>
                <input type="text" class="date-input" id="datepicker1" name="pickup-date"
                    placeholder="Pick-up date & time" required>
                &nbsp;&nbsp;
                <input type="text" class="date-input" id="datepicker2" name="dropoff-date"
                    placeholder="Drop-off date & time" required>
            </div>

            <!-- Include Flatpickr JS -->
            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
            <script>
                // Initialize the date picker
                flatpickr("#datepicker1", {
                    dateFormat: "Y-m-d",
                    minDate: "today",
                });
                flatpickr("#datepicker2", {
                    dateFormat: "Y-m-d",
                    minDate: "today",
                });
            </script>
            <br>
            <div>
                <input type="time" class="time-input" id="pickup-time" name="pickup-time" placeholder="Pick-up time"
                    required>
                &nbsp;&nbsp;
                <input type="time" class="time-input" id="dropoff-time" name="dropoff-time" placeholder="Drop-off time"
                    required>
            </div>
            <br>

            <button type="submit" class="search-button" style=font-weight:700;>SEARCH</button>
        </form>
    </div>

    <footer>
        <p><i class="fas fa-check"></i> Free cancellations on most bookings &nbsp;&nbsp;&nbsp;&nbsp; <i
                class="fas fa-check"></i> No hidden charges or fees &nbsp;&nbsp;&nbsp;&nbsp; <i
                class="fas fa-check"></i> Find great deals</p>
    </footer>
</body>
