<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Student List</title>

        <link rel="shortcut icon" type="image/jpg" href=""/>

        <?php include "head.php"; ?>

        <style type="text/css">
            .container1 { padding: 100px; }
        </style>

        <script type="text/javascript">

        </script>

    </head>

    <body>
        <div class="container1">

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Student List</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="create.php" class="btn btn-sm btn-success">
                                <span class='fas fa-plus'></span>&nbsp;Add New Student
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <?php
                    include_once 'connection.php';

                    $studentListQuery = "SELECT * FROM students";
                    $result = mysqli_query($connection, $studentListQuery);
                    $rowNumber = mysqli_num_rows($result);

                    if ($rowNumber > 0) {
                    ?>
                        <table class='table table-bordered table-hover' width="100%">
                            <thead>
                            <tr>
                                <th class="text-center">Student ID</th>
                                <th>Student Name</th>
                                <th>Email Address</th>
                                <th class="text-center">Mobile Number</th>
                                <th class="text-center">Session</th>
                                <th class="text-center">Batch</th>
                                <th>Registration Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>

                            <?php

                            while($row = mysqli_fetch_array($result)) {

                            ?>
                            <tbody>
                            <tr id="<?php echo $row['id'] ?>">
                                <td class="text-center"><?php echo ($row["student_id"]) ? ($row["student_id"]) : ('N/A'); ?></td>
                                <td>
                                    <a href="details.php?id=<?php echo $row["id"]; ?>" style="color: blue">
                                        <strong><?php echo ($row["student_name"]) ? (ucwords($row["student_name"])) : ('N/A'); ?></strong>
                                    </a>
                                </td>
                                <td><?php echo ($row["email"]) ? ($row["email"]) : ('N/A'); ?></td>
                                <td class="text-center"><?php echo ($row["mobile"]) ? ($row["mobile"]) : ('N/A'); ?></td>
                                <td class="text-center"><?php echo ($row["session"]) ? ($row["session"]) : ('N/A'); ?></td>
                                <td class="text-center"><?php echo ($row["batch"]) ? ($row["batch"]) : ('N/A'); ?></td>
                                <td><?php echo ($row["created_at"]) ? ($row["created_at"]) : ('N/A'); ?></td>

                                <td class="text-center">
                                    <a href="details.php?id=<?php echo $row["id"]; ?>" title='Details Record'><span class='far fa-file-alt' style="color: green"></span></a>
                                    <a href="edit.php?id=<?php echo $row["id"]; ?>" title='Update Record'><span class='fas fa-edit' style="color: blue"></span></a>
                                    <a class="delete" href="delete.php?id=<?php echo $row["id"]; ?>" title='Delete Record'><span class="fas fa-trash-alt" style="color: red"></span></a>
                                </td>
                            </tr>

                            <?php
                            }
                            ?>

                            </tbody>
                        </table>
                        <?php
                    } else {
                        echo "No Result Found";
                    }
                    ?>
                </div>
            </div>

        </div>


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script type="text/javascript">

            $(document).on('click', '.delete',function(ev){
                ev.preventDefault();
                var URL = $(this).attr('href');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this record",
                    icon: "warning",
                    buttons: true,
                    dangerMode: false,
                }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: URL,
                            type: "POST",
                            success: function() {

                                swal("Student Record Deleted Successfully.", {
                                    icon: "success",
                                    title: "Congrats!"
                                }).then(okay => {
                                    if (okay) {
                                        window.location.reload();
                                    }
                                });
                            }
                        });

                    } else {
                        swal("Action Cancelled. Your record is safe!", {icon: "info"});
                    }

                });
            });

        </script>
    </body>
</html>