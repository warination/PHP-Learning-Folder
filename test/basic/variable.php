<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php variables</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    

<div>

<!-- php within html tag -->
<h1 class="text-3xl font-bold 
                 underline bg-green-500 p-5 
              text-white capitalize  ">
    <?php 
    echo "Hello World with html tag"
    ?>
</h1>
<br>

<p class="bg-sky-500">
<?php
    echo "Hello World!"
?>

<?php
    $hi = "Hello World with variable";
    echo $hi;
?>
</p>


<br>


<br>

<p class="bg-blue-900 text-white">
<?php
    $first = "Hello";
    $second= "World!";

    $third = "$first"." "."$second"." ";

    $fourth = "$first $second ";



    define('fifth', 'hello world with constant   ');
    
    $sixth =  5464 + 4988;
    $seventh = 4554;

    $seventh = 5878;

    echo $third;
    echo $fourth;
    echo fifth;
    echo $sixth;
    echo "      ";
    echo $seventh;
?>
</p>

<p>
    <?php
        
    ?>
</p>

</div>




</body>
</html>