<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array php</title>
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
        <h1>    
        <?php

        // indexed arrays
        $people  = array('Love', 'Kush', 'Sara', 'Gill');
        $ids = array(12, 25, 45, 47, 66);
        $cars = ['Honda', 'Toyta', 'Ford'];
        $cars[] = 'BMW';
        $cars[4] = 'Mercedes';
        // echo $people[2];
        // echo $ids[2];
        // echo $cars[4];

        // echo count($cars);
        // print_r($cars);
        // var_dump($cars)


        // Associative arrays

        $people = array ('Tom' => 'Brady', 'Hugh' => 'Jackman', 'Jack'=> 'Reacher');
        $ids = [7=> 'Ronaldo', 4 => 'Ramos', 10=>'Messi', 11=>'Bale'];
        $people['Virat'] = 'Kohli';


        // echo $people['Virat'];
        // echo $ids['11'];
        // print_r($people);
        // var_dump($people);


        // Multidimensional Array

        $cars = array(
            array('Honda', 50, 40),
            array('BMW', 41, 25),
            array('Mercedes' , 21, 14)

        );

        echo $cars[0][2];
        ?>
        </h1>
      
    </div>
</body>
</html>