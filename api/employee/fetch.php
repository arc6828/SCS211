<?php
// Include config file
require_once "../../config.php";

// Attempt select query execution
$sql = "SELECT * FROM employees";
$result = mysqli_query($link, $sql);
// Fetch all data in an array
$data  = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Free result set - manually if need
// mysqli_free_result($result);
// Close connection - manually if need
// mysqli_close($link);
// echo $data;
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>
