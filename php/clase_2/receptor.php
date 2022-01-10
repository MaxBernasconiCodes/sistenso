<?php
//session_start();
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptor de datos</title>
</head>
<body>
    <h2>Sesion</h2>
    <ul></ul>
    <?php
    if(isset($_SESSION ) && !is_null($_SESSION['data']))
    {
        foreach($_SESSION['data'] as $data)
        {
            echo "<li>{$data}</li>";
        }

        //json
        //var_dump(json_decode($_SESSION['json']));
        //var_dump(json_decode($_SESSION['json2']));
    }
    ?>
    </ul>
    <h3>Get y post</h3>
    <?php
    if(isset($_GET) && !is_null($_GET) && !empty($_GET))
    {
        foreach($_GET as $data)
        {
            echo "<li>{$data}</li>";
        }
    }
    if(isset($_POST) && !is_null($_POST && !empty($_POST)))
    {
        foreach($_POST as $data)
        {
            echo "<li>{$data}</li>";
        }
    }
    ?>
</body>
</html>