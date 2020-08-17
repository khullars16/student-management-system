<?php
include "header.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student Details</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <a href="admindash.php" class="btn btn-primary mr-auto">Back to Dashboard</a>
            <a href="../logout.php" class="btn btn-primary ml-auto">Logout</a>
        </div>

        <div class="row mt-5">
            <h1 class="mx-auto">Welcome To Admin Dashboard</h1>
        </div>

        <div class="row mt-5">


            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                        <th>SNo</th>
                        <th>Name</th>
                        <th>Standard</th>
                        <th>Roll No</th>
                        <th>City</th>
                        <th>Contact</th>
                    </thead>

                    <tbody>
                        <?php

                      
                            $sql = "SELECT * from student";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) < 1) {
                                echo "no result found";
                            } else {
                                $count = 0;
                                while ($data = mysqli_fetch_assoc($result)) {
                                    $count++;
                        ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $data["name"]; ?></td>
                                        <td><?php echo $data["standard"]; ?></td>
                                        <td><?php echo $data["rollno"]; ?></td>
                                        <td><?php echo $data["city"]; ?></td>
                                        <td><?php echo $data["pcont"]; ?></td>
                                    </tr>
                        <?php
                                }
                            }
                      

                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</body>

</html>