    <body>
        <link rel="stylesheet" type="text/css" href="assets/css/login.css">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert" role="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
        <?php endif ?>
        
        <div class="container">
              
            <!-- หน้า login ทั้งหมด (ฝั่งซ้าย) -->
            <div class="left side">
                <div class="input-box">
                    <form method="POST" action="../assets/db/signup_update.php" >
                        <header class="signuphead">SIGN UP TO BON VOYAGE</header>
                        <!-- name -->
                        <div class="input-field">
                            <input type="text" class="input" id="name" name="name" required>
                            <label for="Name">NAME</label>
                        </div>
                        <!-- surename -->
                        <div class="input-field">
                            <input type="text" class="input" id="surname" name="surname" required>
                            <label for="surename">SURNAME</label>
                        </div>
                        <!--card-->
                        <div class="input-field">
                            <input type="text" class="input" id="card_id" name="card_id" required>
                            <label for="card_id">CITIZEN ID</label>
                        </div>
                        <!-- username -->
                        <div class="input-field">
                            <input type="text" class="input" id="username" name="username" required autocomplete="off">
                            <label for="username">USERNAME</label>
                        </div>
                        <!-- password -->
                        <div class="input-field">
                            <input type="password" class="input" id="password" name="password" required>
                            <label for="password">PASSWORD</label>
                        </div>
                          <!-- email -->
                          <div class="input-field">
                            <input type="email" class="input" id="email" name="email" required>
                            <label for="email">EMAIL</label>
                        </div>
                        <!-- ปุ่ม login -->
                        <div class="input-field">
                                <input type="submit" class="submit" value="SIGN UP" >
                        </div>
                    <form>
                </div>
            </div>
            <!-- รูปภาพ (ฝั่งขวา) -->
            <div class="right side">
                <img src="assets/img/imgsignup.png" alt="Background Image">
            </div>
            
        </div>
    
</body>
</html>