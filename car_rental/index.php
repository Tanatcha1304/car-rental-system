
<body style=" overflow: hidden;">
<?php
session_start();
include('assets/index_header.php');
?>
<div class="container-fluid">

        <!--Top bar-->
    <?php
    include('assets/nav.php')
    ?>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : "home";
    include $page . '.php';
    ?>
</body>