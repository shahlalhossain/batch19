<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add New Student</title>

        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
                            <h3>Add New Student Record</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="index.php" class="btn btn-sm btn-success pull-right">
                                <span class="fas fa-list"> &nbsp;Back to Student List</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <form action="save.php" method="POST">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="" maxlength="50" required="">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control" value="" maxlength="15" required="">
                                </div>
                                <div class="form-group ">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="" maxlength="30" required="">
                                </div>

                                <div class="form-group">
                                    <label for="session">Session</label>
                                    <select id="session" class="form-control" name="session">
                                        <option value="Session-12">Session-12</option>
                                        <option value="Session-11">Session-11</option>
                                        <option value="Session-10">Session-10</option>
                                        <option value="Session-9">Session-9</option>
                                        <option value="Session-8">Session-8</option>
                                        <option value="Session-7">Session-7</option>
                                        <option value="Session-6">Session-6</option>
                                        <option value="Session-5">Session-5</option>
                                        <option value="Session-4">Session-4</option>
                                        <option value="Session-3">Session-3</option>
                                        <option value="Session-2">Session-2</option>
                                        <option value="Session-1">Session-1</option>
                                    </select>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="batch" id="batch" value="1st">
                                    <label for="batch" class="form-check-label">1st Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="batch" id="batch" value="2nd">
                                    <label class="form-check-label">2nd Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="batch" id="batch" value="3rd">
                                    <label class="form-check-label">3rd Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="batch" id="batch" value="4th ">
                                    <label class="form-check-label">4th Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="batch" id="batch" value="5th">
                                    <label class="form-check-label">5th Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="batch" id="batch" value="6th">
                                    <label class="form-check-label">6th Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="batch" id="batch" value="7th">
                                    <label class="form-check-label">7th Batch</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>

                                <div class="text-right">
                                    <a href="index.php" class="btn btn-sm btn-danger">Cancel</a>
                                    <input type="reset" class="btn btn-sm btn-primary">
                                    <input type="submit" class="btn btn-sm btn-success" name="save" value="Submit">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
