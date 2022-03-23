
<!DOCTYPE html>
<html>
    <head>
        
        <title>Array Count</title>

        <meta charset="UTF-8"> <!-- Character Set নির্দেশ করতে ব্যবহার করা হয়। -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Browser Compatibility আনতে ব্যবহার করা হয়। -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Web Page কে Responsive করতে ব্যবহার করা হয়। -->
        <meta name="description" content="Web Design Tutorials by SET2020"> <!-- Web Page এর Description দিতে ব্যবহার করা হয় -->
        <meta name="keywords" content="HTML, CSS, Bootstrap, JavaScript, jQuery"> <!-- Search Engine এর জন্য Key Words নির্দেশ করতে ব্যবহার করা হয়। -->
        <meta name="author" content="Shahlal Hossain"> <!-- Page এর Creator এর পরিচয় নির্দেশ করতে ব্যবহার করা হয়। -->

        <!-- এক্সটারনাল স্টাইলশিটকে লিঙ্ক করার জন্য <link> এলিমেন্ট ব্যবহার করা হয়। -->
        <!-- CSS Library -->
        <link type="text/css" rel="stylesheet" href="bootstrap.css"> <!-- Example Only -->
        <link type="text/css" rel="stylesheet" href="w3.css"> <!-- Example Only -->
       
        <!-- Custom CSS -->
        <link type="text/css" rel="stylesheet" href="mystyle.css"> <!-- Example Only -->
        <link type="text/css" rel="stylesheet" href="custom.css"> <!-- Example Only -->
        <link type="text/css" rel="stylesheet" href="main.css"> <!-- Example Only -->
        <link type="text/css" rel="stylesheet" href="layout.css"> <!-- Example Only -->

        <!-- Internal CSS Code লিখতে <style></style> Section ব্যবহার করা হয়। -->
        <style type="text/css">
            
            body { 
                background-color: gainsboro;
            }

            #main-content {
                margin-left: 100px;
                margin-right: 100px;
                margin-bottom: 100px;
            }

        </style>

    </head>
    
    <body>

        <h1 id="page-title" style="text-align: center;">Array Count</h1>
        
        <p id="page-description" style="text-align: center;">
            Description
        </p>
        

        <hr>

        <div id="main-content">
        <div class="container">
        <?php
            echo "array count() example";
            $a[0] = 1;
            $a[1] = 3;
            $b[2] = "hello";
            var_dump(count($a));
            echo "<br>";
            var_dump(count($b));
            echo "<br>";
            $c[0]  = 7;
            $c[5]  = 9;
            $c[10] = 11;
            var_dump(count($c));
            echo "<br>";
            echo "count() non Countable|array example (bad example - don't do this)";
            $b[0]  = 7;
            $b[5]  = 9;
            $b[10] = 11;
            var_dump(count($b));
            echo "<br>";
            // var_dump(count(null));

            // var_dump(count(false));
            echo "Recursive count() example";
            $food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));

                // recursive count
                var_dump(count($food, COUNT_RECURSIVE));

                // normal count
                var_dump(count($food));
                echo "<br>";
        ?>
        </div>

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

