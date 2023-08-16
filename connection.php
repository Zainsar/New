<?php
$conn = mysqli_connect("localhost", "root", "", "login");
if (!$conn) {
    die("queryfailed");
} else {
    echo "connected";
}

?>