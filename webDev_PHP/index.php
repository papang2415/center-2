<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Lesson</title>
</head>

<body>
    <!-- <form action="" method="post">
        Enter your Name:
        <input type="text" name="myName">
        <button type="submit">Submit</button>
    </form> -->

    <?php 
    if(isset($_POST['myName'])) {
        helloName($_POST['myName']);
    }

    function helloName($name) {
        echo "<h1> Hello ".$name. ", Welcome!</h1>";
    }
    ?>
    <?php
     echo "Today is " . date("Y/m/d") . "<br>";
     echo "Today is " . date("Y.m.d") . "<br>";
     echo "Today is " . date("Y") . "<br>";
     echo "Today is " . date("l");
    ?>
</body>

</html>