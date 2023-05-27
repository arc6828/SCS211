<?php
$row = json_decode(file_get_contents("http://localhost/scs211/api/employee/fetch-item.php?id={$_GET["id"]}"),true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Record</title>
    <?php include('../layouts/employee-style.php'); ?>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="update.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?= $row["name"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?= $row["address"] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" value="<?= $row["salary"] ?>">
                        </div>
                        <input type="hidden" name="id" value="<?= $row["id"] ?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('../layouts/employee-script.php'); ?>
</body>

</html>