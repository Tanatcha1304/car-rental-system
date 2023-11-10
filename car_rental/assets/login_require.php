<?php
if (!isset($_SESSION['login_userid'])&&!isset($_COOKIE['login_userID'])) {
    header("Location: ../login/");
}
?>