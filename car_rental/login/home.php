
<head>
    <title>Login Page</title>

    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert" role="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <?php
            echo $_SESSION['error'];
            ?>
        </div>
    <?php endif ?>


    <div class="container">
        <!-- หน้า login ทั้งหมด (ฝั่งซ้าย) -->
        <div class="left side">
            <div class="input-box">
                <header class="loginhead">SIGN IN TO <br> BONVOYAGE</header>
                <form method="POST" action="../assets/db/login_check.php"> <!-- Added form tag with action attribute -->
                    <!-- username -->
                    <div class="input-field">
                        <input type="text" class="input" id="username" name="username" required autocomplete="off">
                        <label for="email">USERNAME</label>
                    </div>
                    <!-- password -->
                    <div class="input-field">
                        <input type="password" class="input" id="password" name="password" required>
                        <label for="password">PASSWORD</label>
                    </div>
                    <!-- forgot password -->
                    <div class="form-group">
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                    <!-- ปุ่ม login -->
                    <div class="input-field">
                        <input type="submit" class="submit" value="LOG IN">
                    </div>
                </form>
                <!-- ปุ่ม sign up กรณีไม่มี account -->
                <div class="signup-section">
                    <p>Don't have an account? &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  <a href="index.php?page=signup" class="signup-button">Sign Up</a></p>
                </div>
            </div>
        </div>
        <!-- รูปภาพ (ฝั่งขวา) -->
        <div class="right side">
            <img src="assets/img/imglogin.jpg" alt="Background Image">
        </div>
    </div>
