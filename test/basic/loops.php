<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Array</title>
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
</head>
<body>
    <div>
    <?php
    #for loop

    for($i=0; $i<10; $i++){
        echo $i;
        echo '<br>';
    }

   

?>

    </div>

    <div>
        <?php

         #while loop

    $i=0;

    while($i<10){
        echo $i;
        echo '<br>';
        $i++;
    }

        ?>

    </div>

    <div>
        <?php
            #do while

            $i=10;

            do{
                echo $i;
                echo '<br>';
                $i++;
            }
            while($i<10); 
        ?>
    </div>

    <div>
        <?php
            #for each

            $cars = array('BMW', 'Mercedes', 'Chevy', 'Honda');

            foreach($cars as $car){
                echo $car;
                echo '<br>';
            }
        ?>
    </div>


    <div>
        <?php
            #for each

            $people = array('tom'=> 'tom@email.com',
                            'brad'=>'brad@email.com',
                            'will'=> 'will@email.com'                
            );

            foreach($people as $person=> $email){
                echo "$person : $email";
                echo '<br>';
            }
        ?>
    </div>
    
    
</body>
</html>