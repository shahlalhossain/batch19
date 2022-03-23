<?php 
// include "admin/includes/master.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add New Student</title>

        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

        

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
                            <h3>Add New Product Record</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="index.php" class="btn btn-sm btn-success pull-right">
                                <span class="fas fa-list"> &nbsp;Back to Product List</span>
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
                                    <label for="product_code">Product Code</label>
                                    <input type="text" name="product_code" id="product_code" class="form-control" value="" maxlength="15" required="">
                                </div>
                                <div class="form-group">
                                    <label for="product_title">Product Title</label>
                                    <input type="text" name="product_title" id="product_title" class="form-control" value="" maxlength="50" required="">
                                </div>
                                <div class="form-group">
                                    <label for="product">Product Category</label>
                                    <select id="" class="form-control" name="">
                                    <option>Please Select the Product Category</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="baby_shop">Baby Shop</option>
                                        <option value="be">Beauties</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label for="product_description">Product Description</label>
                                    <input type="text" name="product_description" id="product_description" class="form-control" value="" maxlength="300" required="">
                                </div>
                                <div class="form-group ">
                                    <label for="product_picture">Product Picture</label>
                                    <input type="file" name="product_picture" id="product_picture" class="form-control" value=""  required="">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
        <?php 
// include "admin/includes/footer.php";
?>