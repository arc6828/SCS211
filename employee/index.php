<?php
// Include config file
require_once "../config.php";

// Attempt select query execution
$sql = "SELECT * FROM employees";
$result = mysqli_query($link, $sql);
// Fetch all data in an array
$data  = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Free result set - manually if need
// mysqli_free_result($result);
// Close connection - manually if need
// mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <?php include('../layouts/employee-style.php'); ?>
    <?php include('../layouts/employee-script.php'); ?>
</head>

<body>
    <section class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Employees </h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) { ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['address'] ?></td>
                                    <td><?= $row['salary'] ?></td>
                                    <td>
                                        <a href="detail.php?id=<?= $row['id'] ?>" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>
                                        <a href="update.php?id=<?= $row['id'] ?>" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>
                                        <a href="delete.php?id=<?= $row['id'] ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>