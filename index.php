
<?php
//Heather Monatt
//1/15/2021
//http://hmonatt.greenriverdev.com/328/pp2/index.php
//Pair Program 2

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
    <h1>Pair Program 2</h1>
    <?php
    // Step 1
    echo"<h2>Step 1:</h2>";
    echo"<h2>PHP Array Practice</h2>";

    //Step 2
    echo"<h2>Step 2:</h2>";
    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    //Step 3
    include('functions.php');

    printArr($numbers);




    ?>
</body>
</html>


