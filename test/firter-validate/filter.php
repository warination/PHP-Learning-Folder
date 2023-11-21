<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter & Validation</title>
    <style>
        html,
        body {
            overflow-x: hidden;
        }

        body {
            /* display: flex;
            justify-content: space-between;
            align-items: center; */
            background-color: green;
            font-size: 35px;
            color: white;
            height: 100vh;
        }



        .spinner {
            position: absolute;
            width: 9px;
            height: 9px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .spinner div {
            position: absolute;
           
            width: 50%;
            height: 150%;
            background: #cfff47;
            transform: rotate(calc(var(--rotation) * 1deg)) translate(0, calc(var(--translation) * 1%));
            animation: spinner-fzua35 1s calc(var(--delay) * 1s) infinite ease;
        }

        .spinner div:nth-child(1) {
            --delay: 0.1;
            --rotation: 36;
            --translation: 150;
        }

        .spinner div:nth-child(2) {
            --delay: 0.2;
            --rotation: 72;
            --translation: 150;
        }

        .spinner div:nth-child(3) {
            --delay: 0.3;
            --rotation: 108;
            --translation: 150;
        }

        .spinner div:nth-child(4) {
            --delay: 0.4;
            --rotation: 144;
            --translation: 150;
        }

        .spinner div:nth-child(5) {
            --delay: 0.5;
            --rotation: 180;
            --translation: 150;
        }

        .spinner div:nth-child(6) {
            --delay: 0.6;
            --rotation: 216;
            --translation: 150;
        }

        .spinner div:nth-child(7) {
            --delay: 0.7;
            --rotation: 252;
            --translation: 150;
        }

        .spinner div:nth-child(8) {
            --delay: 0.8;
            --rotation: 288;
            --translation: 150;
        }

        .spinner div:nth-child(9) {
            --delay: 0.9;
            --rotation: 324;
            --translation: 150;
        }

        .spinner div:nth-child(10) {
            --delay: 1;
            --rotation: 360;
            --translation: 150;
        }

        @keyframes spinner-fzua35 {

            0%,
            10%,
            20%,
            30%,
            50%,
            60%,
            70%,
            80%,
            90%,
            100% {
                transform: rotate(calc(var(--rotation) * 1deg)) translate(0, calc(var(--translation) * 1%));
            }

            50% {
                transform: rotate(calc(var(--rotation) * 1deg)) translate(0, calc(var(--translation) * 1.5%));
            }
        }
    </style>
</head>

<body>
    <div>

        <?php
        if (filter_has_var(INPUT_POST, 'data')) {
            $email = $_POST['data'];
    
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            echo $email . '<br>';
    
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
                echo 'Email is valid!!';
            } else {
                echo 'Email is not valid';
            }
    
            /*
            if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
    
                echo 'Email is valid!!';
            } else {
                echo 'Email is not valid';
            }
            */
        }
        ?>
    
    
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="text" name="data">
            <button type="submit">submit</button>
        </form>
    </div>


    <div class="spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

</body>

</html>