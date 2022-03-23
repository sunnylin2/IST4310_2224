<head>
        <title>5K Run Registration</title>
        <style type="text/css">
                h1 { color:  red ; }
                h2 { font-family: Times New Roman; color: blue ; }
                p { font-family: Ariel; color: green}
                input[type=submit] {
                        background-color: #4CAF50; /* Green */
                        border: none;
                        color: white;
                        padding: 20px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 12px;
                        margin: 4px 2px;
                        cursor: pointer;
                }
        </style>
</head>
<body>
        <h1>5K Run Registration</h1>
<?php

        if ((isset($_POST['age'])) && (isset($_POST['size'])))
        {
                $first_name = filter_var( $_POST['first_name'], FILTER_SANITIZE_STRING);
                $last_name = filter_var( $_POST['last_name'], FILTER_SANITIZE_STRING);
                $address = filter_var( $_POST['address'], FILTER_SANITIZE_STRING);
                $city = filter_var( $_POST['city'], FILTER_SANITIZE_STRING);
                $state = filter_var( $_POST['state'], FILTER_SANITIZE_STRING);
                $zip = filter_var( $_POST['zip'], FILTER_SANITIZE_STRING);
                $age = filter_var( $_POST['age'], FILTER_SANITIZE_STRING);
                $size = filter_var( $_POST['size'], FILTER_SANITIZE_STRING);

                echo "<p>Your First Name is " . $first_name . "</p>" ;
                echo "<p>Your Last Name is " . $last_name . "</p>" ;
                echo "<p>Your Address is " . $address . "</p>" ;
                echo "<p>Your City is " . $city . "</p>" ;
                echo "<p>Your State is " . $state . "</p>" ;
                echo "<p>Your Zipcode is " . $zip . "</p>" ;

		// Enter your codes below



		// ----------------------------------------------------

                echo "<p style='color: darkblue ;'>Your registration fee is " . $fee . "</p>" ;
        }
        else
        {
                print "<p>Missing or invalid parameters. Please go back to the 5krun.html page to
                enter valid information.<br />";
                print "<a href='5krun.html'>Runner Registration Page</a>";
        }
?>
        </body>
