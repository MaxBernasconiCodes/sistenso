<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['data'] = [1,'dato', true, false];
    $jsondata = json_encode(array("Max"=>35, "Pablo"=>36, "Juakyn"=>28));
    $jsondata2 = json_encode(['dato1','dato2']);
    $_SESSION['json'] = $jsondata;
    $_SESSION['json2'] = $jsondata2;
    ?>
    <form action="./receptor.php" method="GET">Get
        <input name="text" type="text">
        <input name="numbrer" type="number">
        <input type="submit" value="Enviar">
    </form>
    <form action="./receptor.php" method="POST">Post
        <input name="text" type="text">
        <input name="numbrer" type="number">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>