<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "db_epicgames") or die("Không thể kết nối!");
    mysqli_query($conn, "SET NAMES 'utf8'");
    $check = mysqli_query($conn, "SELECT email, gameid FROM cart WHERE email = '".$_SESSION['email']."' and gameid = '".$_GET['id']."'") or die(mysqli_error($conn));
    if (mysqli_num_rows($check) > 0) {
        mysqli_close($conn);
    } else {
        mysqli_query($conn, "INSERT INTO cart(email, gameid) VALUES ('".$_SESSION['email']."', '".$_GET['id']."')") or die(mysqli_error($conn));
    }
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

?>