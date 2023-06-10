<?php
$staffs_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"),true);
$staffs = $staffs_obj["people"];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Staff Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .staff-container {
            display: flex;
            flex-wrap: wrap;
        }

        .staff-card {
            width: 300px;
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .staff-card img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .staff-card h2 {
            margin-bottom: 5px;
        }

        .staff-card p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="staff-container">
        <?php foreach ($staffs as $row) { ?>
            <div class="staff-card">
                <img class="rounded-circle" src="<?= $row['image'] ?>" alt="Staff 1">
                <h2><?= $row['name'] ?></h2>
                <p>Education: <?= $row['education'] ?></p>
                <p>Role: <?= $row['role'] ?></p>
                <p>Email: <?= $row['email'] ?></p>
                <p>Phone: <?= $row['phone'] ?></p>
            </div>
        <?php } ?>

        <!-- Add more staff cards as needed -->
    </div>
</body>

</html>