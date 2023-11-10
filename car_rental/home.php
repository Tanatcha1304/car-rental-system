<!--text and image-->
<div>
    <?php
    include('assets/index_header.php');
    ?>
    <link rel="stylesheet" href="assets/css/home_css.css" />
    <div class="row">
        <div class="col-sm ml-5">
            <div class="bigger">
                <h1 style="font-weight: 800;">MAKE TRIPS</h1>
                <h1 style="font-weight: 800;">BETTER WITH</h1>
                <h1 style="color:#406A8D; font-weight: 800;">BON VOYAGE</h1>
            </div>
            <p class="small">And collect the best moments of your life</p>

            <?php
            if (!isset($_SESSION['login_user'])) {
                echo '<button type="button" id="rent" class="btn btn-outline-dark rounded-pill" onclick="location.href=\'\search\'">RENT NOW</button>';
            } else {
                echo '<button type="button" id="rent" class="btn btn-outline-dark rounded-pill" onclick="location.href=\'\search\'">RENT NOW</button>';
            }
            ?>

        </div>
        <div class="col-sm ml-5">
            <img class="car1" src="https://i.ibb.co/gm0q70j/rhys-rainbow-mccormack-C9j3p-JHll-Q-unsplash.jpg" alt="car1"
                style="width: 280.03px;">
        </div>
    </div>
</div>

<!--sticky icon-->
<div class="sticky-icon">
    <a href="#" class="Line"><i class="fa-brands fa-line"></i></a>
    <a href="#" class="Facebook"><i class="fa-brands fa-square-facebook"></i></a>
    <a href="#" class="Tel"><i class="fa-solid fa-phone"></i></a>
</div>

<!--brand car-->
<div class="con container h-100">
    <div class="row align-items-center">
        <div class="con container rounded">
            <div class="slider">
                <div class="logos">
                    <img class="bl" src="https://i.ibb.co/SJcKCK5/Chevrolet-logo-2013-2560x1440.png" alt="Chevrolet"
                        style="width: 102.16px;">
                    <img class="bl" src="https://i.ibb.co/ZdPBf1D/pngimg-com-car-logo-PNG1665.png" alt="toyota"
                        style="width: 74.22px;">
                    <img class="bl" src="https://i.ibb.co/Y7SZ5Rs/Ford-Motor-Company-Logo.png" alt="Ford"
                        style="width: 96.92px;">
                    <img class="bl" src="https://i.ibb.co/wzXP48d/Honda-PNG-HD-Quality.png" alt="Honda"
                        style="width: 87.31px;">
                    <img class="bl" src="https://i.ibb.co/f2NqnmG/pngimg-com-car-logo-PNG1656.png" alt="suzuki"
                        style="width: 62.87px;">
                    <img class="bl" src="https://i.ibb.co/m4YYXgj/pngimg-com-car-logo-PNG1669.png" alt="subaru"
                        style="width: 87.31px;">
                    <img class="bl" src="https://i.ibb.co/thvcGf1/pngimg-com-car-logo-PNG1658.png" alt="nissan"
                        style="width: 62.87px;">
                    <img class="bl" src="https://i.ibb.co/RvwtHHM/pngimg-com-car-logo-PNG1645.png" alt="hyundai"
                        style="width: 87.31px;">
                </div>
                <div class="logos">
                    <img class="bl" src="https://i.ibb.co/SJcKCK5/Chevrolet-logo-2013-2560x1440.png" alt="Chevrolet"
                        style="width: 102.16px;">
                    <img class="bl" src="https://i.ibb.co/ZdPBf1D/pngimg-com-car-logo-PNG1665.png" alt="toyota"
                        style="width: 74.22px;">
                    <img class="bl" src="https://i.ibb.co/Y7SZ5Rs/Ford-Motor-Company-Logo.png" alt="Ford"
                        style="width: 96.92px;">
                    <img class="bl" src="https://i.ibb.co/wzXP48d/Honda-PNG-HD-Quality.png" alt="Honda"
                        style="width: 87.31px;">
                    <img class="bl" src="https://i.ibb.co/f2NqnmG/pngimg-com-car-logo-PNG1656.png" alt="suzuki"
                        style="width: 62.87px;">
                    <img class="bl" src="https://i.ibb.co/m4YYXgj/pngimg-com-car-logo-PNG1669.png" alt="subaru"
                        style="width: 87.31px;">
                    <img class="bl" src="https://i.ibb.co/thvcGf1/pngimg-com-car-logo-PNG1658.png" alt="nissan"
                        style="width: 62.87px;">
                    <img class="bl" src="https://i.ibb.co/RvwtHHM/pngimg-com-car-logo-PNG1645.png" alt="hyundai"
                        style="width: 87.31px;">
                </div>
            </div>
        </div>
    </div>
</div>
</div>