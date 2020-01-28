<?php include('db.php'); ?>

<html>
<head>
    <title>PHP-MYSQL PROYECTO 1</title>
</head>
<body>
    <h2>Ingrese su nombre</h2>
    <form action="save_name.php" method="POST">
        <input type="text" name="name">
        <input type="submit" name="save_name" value="ENVIAR">
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $query = "SELECT * FROM user";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>