<?php
include('server.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surename = $_POST['surname'];
    $card = $_POST['card_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];



    $stmt = $conn->prepare("INSERT INTO users (Username, Password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    if ($stmt->execute()) {
        $tmp = 1;
    }

    // Add code to get User_ID
    $userID = null;
    if ($tmp == 1) {
        $stmt = $conn->prepare("SELECT User_ID FROM users WHERE Username = ? AND Password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($userID);
        $stmt->fetch();
        $stmt->close();
    }

    $tmp_2 = $conn->prepare("INSERT INTO customer (`Name`, `Surname`, `Card_ID`, `Email`,`User_ID`) VALUES (?, ? ,?, ?, ?)");
    $tmp_2->bind_param("sssss", $name, $surename, $card, $email,$userID);
    if ($userID && $tmp_2->execute()) {
        // Signup successful
        $_SESSION['success'] = "Signup successful! You can now log in.";
        header("Location: /test/login/");
        exit();
    } else {
        // Signup failed
        $_SESSION['error'] = "Signup failed. Please try again.";
        header("Location: /test/login/index.php?page=signin");
        exit();
    }


}
?>