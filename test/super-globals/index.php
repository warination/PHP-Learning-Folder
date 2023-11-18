<?php include('server-info.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1> SERVER & FILE INFORMATION</h1>

        <?php if ($server): ?>
            <ul class="list-group">
                <?php foreach ($server as $key => $value): ?>

                    <li class="list-group-item">
                        <strong>
                            <?php echo "$key "; ?> :
                        </strong>
                        <?php echo "$value"; ?>

                    </li>


                <?php endforeach; ?>
            </ul>
        <?php endif; ?>



                <h1> SERVER & FILE INFORMATION</h1>

                <?php if ($client): ?>
                <ul class="list-group">
                     <?php foreach ($client as $key => $value): ?>

                     <li class="list-group-item">
                <strong>
                    <?php echo "$key "; ?> :
                </strong>
                <?php echo "$value"; ?>

            </li>


        <?php endforeach; ?>
            </ul>


        <?php endif; ?>

    </div>
</body>

</html>