<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>PHP | First PHP Page </title>

        <meta charset="UTF-8"> <!-- Character Set নির্দেশ করতে ব্যবহার করা হয়। -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Browser Compatibility আনতে ব্যবহার করা হয়। -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Web Page কে Responsive করতে ব্যবহার করা হয়। -->
        <meta name="description" content="Web Design Tutorials by SET2020"> <!-- Web Page এর Description দিতে ব্যবহার করা হয় -->
        <meta name="keywords" content="HTML, CSS, Bootstrap, JavaScript, jQuery"> <!-- Search Engine এর জন্য Key Words নির্দেশ করতে ব্যবহার করা হয়। -->
        <meta name="author" content="Shahlal Hossain"> <!-- Page এর Creator এর পরিচয় নির্দেশ করতে ব্যবহার করা হয়। -->

        <!-- এক্সটারনাল স্টাইলশিটকে লিঙ্ক করার জন্য <link> এলিমেন্ট ব্যবহার করা হয়। -->
        <!-- CSS Library -->
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Example Only -->
        <link type="text/css" rel="stylesheet" href="w3.css"> <!-- Example Only -->
       
        <!-- Custom CSS -->
        <link type="text/css" rel="stylesheet" href="mystyle.css"> <!-- Example Only -->
        <link type="text/css" rel="stylesheet" href="custom.css"> <!-- Example Only -->
        <link type="text/css" rel="stylesheet" href="main.css"> <!-- Example Only -->
        <link type="text/css" rel="stylesheet" href="layout.css"> <!-- Example Only -->

        <!-- Internal CSS Code লিখতে <style></style> Section ব্যবহার করা হয়। -->
        <style type="text/css">
            
            .page-header {
                background-color:grey;
                padding: 50px;
                border-radius: 10px;
            }

        </style>

    </head>
    
    <body>

        <div class="page-header text-center">
            <h1>PHP -- First PHP Page </h1>
            <p> We are learning PHP. </p>
        </div>
        
        <br>

        <div class="container" style="border: 1px solid green">

                <?php 
                echo ("Hello Participants, Welcome to Set Training Programme");
                echo "<br>";
                echo ("Hello Participants, Welcome to Set Training Programme");
                echo "<br>";
                echo ("Hello Participants, Welcome to Set Training Programme");
                echo "<br>";
                echo ("Hello Participants, Welcome to Set Training Programme");


                // This is a single-line comment
                # This is also a single-line comment

                /*
                This is a multiple-lines comment block
                that spans over multiple
                lines
                */

                ?>

        </div>


        <!-- জাভাস্ক্রিপ্ট (JavaScript) জেকুয়েরি (jQuery) ইত্যাদি স্ক্রিপ্ট যুক্ত করার জন্য <script></script> ট্যাগ ব্যবহার করা হয়। -->
        <!-- JavaScript Library -->
        <script type="text/javascript" src="jquery.js"></script> <!-- Example Only -->
        <script type="text/javascript" src="bootstrap.js"></script> <!-- Example Only -->
        <script type="text/javascript" src="w3.js"></script> <!-- Example Only -->

        <!-- Custom JavaScript -->
        <script type="text/javascript" src="myscript.js"></script> <!-- Example Only -->
        <script type="text/javascript" src="custom.js"></script> <!-- Example Only -->
        <script type="text/javascript" src="main.js"></script> <!-- Example Only -->

    </body>
</html>

