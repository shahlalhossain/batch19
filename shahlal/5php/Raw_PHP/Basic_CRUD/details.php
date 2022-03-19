<?php
// Include database connection file
require_once "connection.php";

$recordID = $_GET['id'];

if(isset($recordID)) {
    $singleRecordQuery = "SELECT * FROM students WHERE id=$recordID";
    $result = mysqli_query($connection, $singleRecordQuery);
    $row = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Details Record of Student</title>
        <?php include "head.php"; ?>

        <style type="text/css">
            .container1 {
                padding: 100px;
            }
        </style>
    </head>

    <body>
        <div class="container1">

            <div class="card">

                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="pull-left">Details Record of Student</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="btn-group" role="group">
                                <a href="create.php" class="btn btn-sm btn-success">
                                    <span class="fas fa-plus"></span>&nbsp;Create New
                                </a>
                            </div>
                            <div class="btn-group" role="group">
                                <a href="index.php" class="btn btn-sm btn-primary">
                                    <span class='fas fa-list'></span>&nbsp;Back to List
                                </a>
                            </div>
                            <div class="btn-group" role="group">
                                <a href="edit.php?id=<?php echo $recordID; ?>" class="btn btn-sm btn-info">
                                    <span class='fas fa-edit'></span>&nbsp;Update Record
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class='table table-bordered table-striped'>
                                <tbody>
                                <tr>
                                    <td class="font-weight-bold text-right">Student Name</td>
                                    <td><?php echo $row["student_name"] ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold text-right">Email Address</td>
                                    <td><?php echo $row["mobile"] ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold text-right">Mobile Number</td>
                                    <td><?php echo $row["email"] ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold text-right">Session</td>
                                    <td><?php echo $row["session"] ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold text-right">Batch</td>
                                    <td><?php echo $row["batch"] ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold text-right">Registration Date</td>
                                    <td><?php echo $row["created_at"] ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger pull-right delete">
                                <span class='fas fa-trash-alt'></span>&nbsp;Delete this Record
                            </a>
                        </div>
                    </div>
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
                                        window.location.href="index.php";
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
