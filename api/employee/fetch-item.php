<?php
// Include config file
require_once "../../config.php";
// Prepare a select statement
$sql = "SELECT * FROM employees WHERE id = '{$_GET["id"]}'";
// echo $sql;
$result = mysqli_query($link, $sql);
// if (mysqli_num_rows($result) == 0) {
//     // URL doesn't contain valid id parameter. Redirect to error page
//     header("location: ../error.php");
//     exit();
// }
/* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
$row = mysqli_fetch_assoc($result);
echo json_encode($row, JSON_UNESCAPED_UNICODE);
?>
