

<nav class="navbar navbar-expand-lg navbar-light >
    <div class="container-fluid">
        <?php
        $currentPage = $_SERVER['REQUEST_URI'];
        if ($currentPage === "/test/login/" || $currentPage === "/test/login/index.php?page=signup") {
            echo '<a class="navbar-brand" href="/test/">
                    <img src="https://i.ibb.co/VqP1v2W/Group-29.png" alt="logo" width="70" height="47.14" class="ml-5">
                </a>';
        } else {
            echo '<a class="navbar-brand" href="/test/">
                    <img src="https://i.ibb.co/VqP1v2W/Group-29.png" alt="logo" width="70" height="47.14" class="ml-5">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mr-5">
                        <li class="nav-item">
                            <a class="nav-link" href="/test/search/">CAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT</a>
                        </li>';
            if (!isset($_COOKIE['login_username'])) {
                echo '<li class="nav-item"><a class="nav-link" href="/test/login/">LOGIN</a></li>';
            } else {
                if ($_COOKIE['login_role']=='1') {
                    echo '<li class="nav-item"><a class="nav-link" href="/test/admin/">Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="/test/assets/logout.php">Logout</a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" href="/test/login">'.$_COOKIE['login_username'].'</a></li>
                    <li class="nav-item"><a class="nav-link" href="/test/assets/logout.php">Logout</a></li>
                    ';
                }
            }
            echo '</ul>
                </div>';
        }
        ?>
    </div>
</nav>

    <style>
        .nav-item{
    font-family: 'Montserrat', sans-serif;
    font-weight: 300;
    }

    .bigger{
        font-family: 'Montserrat', sans-serif;
        padding-top: 10%;
        margin-left: 30px;
    }

    p.small{
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        font-size: 20;
        margin-left: 30px;
    }
    </style>