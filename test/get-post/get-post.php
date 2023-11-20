<?php
if(isset($_GET['name'])){
    // echo  $_GET['name'];
    print_r($_GET);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Post PHP</title>
</head>

<body>
    <form method="GET" action="get-post.php">
        <div>

            <label for="">Name</label>
            <input type="text" name="name" id="">
        </div>

        <div>
            <label for="">Email</label>
            <input type="text" name="email" id="">
        </div>

        <input type="submit" value="submit">
    </form>
</body>

</html>