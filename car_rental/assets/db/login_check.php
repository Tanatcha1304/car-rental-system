<?php
include('server.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE Username = ? AND Password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $role = $row['Role'];
        $_SESSION['login_username'] = $username;
        $_SESSION['login_role'] = $role;
        $_SESSION['login_userid'] = $row['User_ID'];

        setcookie('login_username', $username, 0, "/");
        setcookie('login_role', $role, 0, "/");
        setcookie('login_userID', $row['User_ID'], 0, "/");

        header("Location: /test/search/");
        exit();
    } else {
        $_SESSION['error'] = "Invalid username or password";
        header("Location: /test/login/");
        exit();
    }
}
?>