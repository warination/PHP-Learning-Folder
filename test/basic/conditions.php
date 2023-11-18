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
          $num =532;

        /*  if($num>5){
            for($i=1; $i<=10; $i++){
                echo $num*$i.'<br>';
            };
          }else{
                echo 'Try again!!<br><br><br><br><br><br>';
          };
          */



          $age=17;
          if($age>10){
            echo 'You Are Underage For Applying ';
          }elseif ($age<20) {
            echo 'hello';
          };

        ?>



        
</div>




</body>
</html>