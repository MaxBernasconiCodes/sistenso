    <?php include('./00_header.php'); ?>
    <h2>Sesion</h2>
    <ul></ul>
    <?php
    if(isset($_SESSION['data']) && !is_null($_SESSION['data']) &&  !empty($_GET))
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
    <?= '<h2> Get y Post </h2>' ?>
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