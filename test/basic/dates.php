<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dates</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #182217;
            color: white;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    

<div class="bg-green-500">
        <?php
        /*
            $today = date('d'); //date
            echo $today;
            $today = date('m');  //month
            echo $today;
            $today = date('y');  //year
            echo $today;
            $today = date('d/m/y');  //together date
            echo $today;
            $today = date('d-m-y');  //together date
            echo $today;
            $today = date('l'); //day
            echo $today;

            $today = date('h'); //hour
            echo $today;

            $today = date('i'); //minut
            echo $today;

            $today = date('s'); //second
            echo $today;

            $today = date('a'); //AM-PM
            echo $today;
            */



            date_default_timezone_set('Asia/Calcutta');
            $today = date('h : i : s a'); //time
            echo $today;






        ?>
        
</div>




</body>
</html>