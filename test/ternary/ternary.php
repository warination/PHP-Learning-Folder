<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary</title>
    <style>

    html,body{
    overflow-x: hidden;
    }
    body {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: green;
        font-size: 35px;
        color: white;
        height: 100vh;
    }
</style>
</head>
<body>

<div>


    <?php
        $loggedin = true;

        if($loggedin){
            echo 'You Are Logged In';
                                            //You Are Logged In
        }else{
            echo 'Try to log in again';
        };


        echo '<br><br>';
        $loggedin = false;

        if($loggedin){
            echo 'You Are Logged In';
                                            //Try to log in again
        }else{
            echo 'Try to log in again';
        };
        echo '<br><br>';


        $loggedin = false;
        echo ($loggedin)? 'You are logged in' : 'try to log in again'; //try to log in again


        echo '<br><br>';

        $score = 15;
        $age = 20;

        echo 'Your score is :'  . ($score>10?($age>10?'Average':'Exceptional'):($age>10?'Horrible':'Average'));  //Average
        
    ?>
</div>

<div>
    <?php
        $loggedin = true;     
    ?>

    <?php if($loggedin) { ?>
        <h1>Weclome User</h1>
    <?php }else { ?>
        <h1>Welcome Guest</h1>
    <?php } ?>

    
    <?php if($loggedin): ?>
        <h1>Welcome User</h1>
        <?php else: ?>
            <h1>Welcome Guest</h1>
    
    <?php endif ?>


    <?php $arr = array( 1,2,3,4,5,6,7,8,9) ?>
    <?php foreach($arr as $ar): ?>
     <?php echo $ar; ?> 
    
    <?php endforeach ?>


    <?php echo '<br><br><br>' ?>
    <?php for($i = 0; $i <= 10; $i++): ?>
        <?php echo $i; ?>
    <?php endfor ?>
</div>
    
</body>
</html>