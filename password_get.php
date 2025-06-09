<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password_info</title>
</head>
<body>
    <?php
        // echo $_GET['password_target']

        $string= $_GET['password_target'];
        $number= number_format($string);

        function generateRandomString($length) {
            return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
            }

        echo  generateRandomString($number);
    ?>
</body>
</html>