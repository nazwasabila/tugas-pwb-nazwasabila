<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: skyblue;
        }
    </style>
</head> 
<body>
    <h1 style="color: white; text-align: center;">SELAMAT DATANG!</h1>
    <br>
   <h2 style="color: white; text-align: center;">
    Hello <?php echo $_POST["firstname"];
    ?> <?php echo $_POST["lastname"];
    ?>!<br />
    Your gender is <?php echo $_POST["gender"];
    ?> <br>
    Your nationality is <?php echo $_POST["nationality"];
    ?> <br>
    Your language spoke is <?php echo $_POST["language"];
    ?> <br>
    Your bio is : <?php echo $_POST["bio"];
    ?> </h2>
    <br>
    <h3 style="color: white; size: 500px; text-align: justify; text-align: center;">Terima kasih telah bergabung di Website kami <?php echo $_POST["firstname"]; 
    ?> <?php echo $_POST["lastname"];
    ?>. Media Belajar Kita Bersama!</h3>
</body>
</html>