    <?php
    include('./00_header.php');
    //$_SESSION['data'] = [1, 'dato', true, false];
    //$jsondata = json_encode(array("Max" => 35, "Pablo" => 36, "Juakyn" => 28));
    //$jsondata2 = json_encode(['dato1', 'dato2']);
    //$_SESSION['json'] = $jsondata;
    //$_SESSION['json2'] = $jsondata2;
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