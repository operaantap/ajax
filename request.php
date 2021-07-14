<!DOCTYPE html>

<html lang="en">



<head>

    <title>PHP REQUEST</title>

</head>



<body>

    <form action="request.php" method="post">

        What is your Name? <input type="text" name="name" id="name"> <br><br>

        What do you wish for? <textarea name="wish" id="wish"></textarea> <br><br>

        <input type="submit" value="See Wish">

    </form>



    <?php

        $name = $_REQUEST['name'];

 //assigning a variable to the input with ID=name


        if (empty($name)) {

            echo "<p style='color:white; background:red'>" . "No Name entered " . "</p>";

//you can style your echo output as you do in HTML

        } else {

            echo "<p style='color:white; background:green'>" . $name . "</p>" . "wishes for";

        };

        $wish = $_REQUEST['wish'];
//assigning a variable to the input with ID=wish

        if (empty($wish)) {

            echo "<p style='color:white; background:red'>" . "Invalid Wish" . "</p>";

        } else {

            echo "<p style='color:black; background:gold'>" . $wish . "</p>";

        };

    

    ?>

</body>

</html>

