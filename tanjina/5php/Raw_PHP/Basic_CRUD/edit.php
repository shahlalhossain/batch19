<?php
// Include Database Connection File
require_once "connection.php";

$studentRecordID = $_GET['id'];

$singleRecordFetchQuery = "SELECT * FROM students WHERE id=$studentRecordID";

$result = mysqli_query($connection, $singleRecordFetchQuery);

$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update Student Record</title>
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
                            <h3>Update Student Record</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="index.php" class="btn btn-sm btn-primary pull-right">
                                <span class="fas fa-list"> &nbsp;Back to Student List</span>
                            </a>
                            <a href="create.php" class="btn btn-sm btn-success">
                                <span class='fas fa-plus'></span>&nbsp;Add New Student
                            </a>
                            <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-danger pull-right delete">
                                <span class='fas fa-trash-alt'></span>&nbsp;Delete this Record
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                        
                        <form action="update.php" method="POST">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?php echo $row["student_name"]; ?>" maxlength="50" required="">
                        </div>

                        <div class="form-group ">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $row["email"]; ?>" maxlength="30" required="">
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo $row["mobile"]; ?>" maxlength="12"required="">
                        </div>

                        <div class="form-group">
                            <label for="session">Session</label>
                            <?php $session = $row["session"]; ?>
                            <select id="session" class="form-control" name="session">
                                <option value="Session-12" <?php echo ($session == "Session-12") ? 'selected="selected"' : ''; ?>>Session-12</option>
                                <option value="Session-11" <?php echo ($session == "Session-11") ? 'selected="selected"' : ''; ?>>Session-11</option>
                                <option value="Session-10" <?php echo ($session == "Session-10") ? 'selected="selected"' : ''; ?>>Session-10</option>
                                <option value="Session-9" <?php echo ($session == "Session-9") ? 'selected="selected"' : ''; ?>>Session-9</option>
                                <option value="Session-8" <?php echo ($session == "Session-8") ? 'selected="selected"' : ''; ?>>Session-8</option>
                                <option value="Session-7" <?php echo ($session == "Session-7") ? 'selected="selected"' : ''; ?>>Session-7</option>
                                <option value="Session-6" <?php echo ($session == "Session-6") ? 'selected="selected"' : ''; ?>>Session-6</option>
                                <option value="Session-5" <?php echo ($session == "Session-5") ? 'selected="selected"' : ''; ?>>Session-5</option>
                                <option value="Session-4" <?php echo ($session == "Session-4") ? 'selected="selected"' : ''; ?>>Session-4</option>
                                <option value="Session-3" <?php echo ($session == "Session-3") ? 'selected="selected"' : ''; ?>>Session-3</option>
                                <option value="Session-2" <?php echo ($session == "Session-2") ? 'selected="selected"' : ''; ?>>Session-2</option>
                                <option value="Session-1" <?php echo ($session == "Session-1") ? 'selected="selected"' : ''; ?>>Session-1</option>
                            </select>
                        </div>

                        <div class="form-check form-check-inline">
                            <?php $batch = $row["batch"]; ?>
                            <input class="form-check-input" type="radio" name="batch" id="batch" value="1st" <?php echo ($batch == "1st") ? 'checked' : ''; ?>>
                            <label for="batch" class="form-check-label">1st Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="batch" id="batch" value="2nd" <?php echo ($batch == "2nd") ? 'checked' : ''; ?>>
                            <label class="form-check-label">2nd Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="batch" id="batch" value="3rd" <?php echo ($batch == "3rd") ? 'checked' : ''; ?>>
                            <label class="form-check-label">3rd Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="batch" id="batch" value="4th" <?php echo ($batch == "4th") ? 'checked' : ''; ?>>
                            <label class="form-check-label">4th Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="batch" id="batch" value="5th" <?php echo ($batch == "5th") ? 'checked' : ''; ?>>
                            <label class="form-check-label">5th Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="batch" id="batch" value="6th" <?php echo ($batch == "6th") ? 'checked' : ''; ?>>
                            <label class="form-check-label">6th Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="batch" id="batch" value="7th" <?php echo ($batch == "7th") ? 'checked' : ''; ?>>
                            <label class="form-check-label">7th Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>

                        <div class="text-right">
                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
                            <a href="index.php" class="btn btn-sm btn-danger">Cancel</a>
                            <input type="submit" class="btn btn-sm btn-success" name="update" value="Submit">
                        </div>

                    </form>
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

                                swal("Record Deleted.", {
                                    icon: "success",
                                    title: "Congrats!"
                                }).then(okay => {
                                    if (okay) {
                                        window.location.href="indexs.phpp";
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
