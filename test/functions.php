<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php funtions</title>
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
            function ass(){
                echo "Hello World! <br>";
                echo "'Hi there, I am learning PHP from scratch.'<br>";
            }

            ass();

            function add ($num1, $num2){
                $sum = $num1 + $num2;
                echo "$num1 + $num2 = $sum <br>";
            }

            add(25,36);

        ?>
        
</div>




</body>
</html>