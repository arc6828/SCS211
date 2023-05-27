<?php
$row = json_decode(file_get_contents("http://localhost/scs211/api/employee/fetch-item.php?id={$_GET["id"]}"),true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Record</title>
    <?php include('../layouts/employee-style.php'); ?>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>Name</label>
                        <p><b><?= $row["name"] ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p><b><?= $row["address"] ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <p><b><?= $row["salary"] ?></b></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include('../layouts/employee-script.php'); ?>
</body>

</html>