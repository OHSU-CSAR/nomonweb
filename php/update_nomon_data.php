<?php

include '../../mysql_login.php';

function make_query($connection, $query) {
    $result = mysqli_query($connection, $query);
    $result_array = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($result_array, $row);
        }
    }
    return $result_array;
}

$connection = mysqli_connect($host, $username, $password, $dbname);

$click_dist = $_POST['click_dist'];
$user_id = $_POST['user_id'];
$Z = $_POST['Z'];
$ksigma = $_POST['ksigma'];
$ksigma0 = $_POST['ksigma0'];
$y_li = $_POST['y_li'];
$rotate_index = $_POST['rotate_index'];


$query = "UPDATE user_info SET click_dist = '$click_dist', Z = '$Z', ksigma = '$ksigma', ksigma0 = '$ksigma0',
 rotate_index = '$rotate_index', y_li = '$y_li'
  WHERE username = '$user_id'";

$result_array = make_query($connection, $query);

echo $query;

$connection->close();
?>
