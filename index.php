<?php
    require './connection.php'; 

    $query = "SELECT * FROM person_detail ";
    $statement = $connection->prepare($query);
    $statement->execute();
    $persons = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title> 
    </head>
    <body>
        <br><hr><br>
        <form action="./datashow.php" method="post">
            <label for="name">NAME</label>
            <input type="text" name="name"><br><br>
            <label for="age">AGE</label>
            <input type="number" name="age"><br><br>
            <label for="addr">ADDRESS</label>
            <input type="text" name="addr"><br><br>
            <label for="mobile">MOBILE NUMBER</label>
            <input type="text" name="mobile"><br><br>
            <label for="gender">GENDER</label>
            <input type="text" name="gender"><br><br>
            <input type="submit" value="Submit">
        </form><br><hr><br>
        <table border="1">
            <thead>
                <th>NAME</th>
                <th>AGE</th>
                <th>ADDRESS</th>
                <th>MOBILE</th>
                <th>GENDER</th>
                <th>DELETE</th>
                <th>UPDATE</th>
            </thead>
            <tbody>
                <?php foreach($persons as $person) { ?>
                    <tr>
                        <td><?= $person['name']?></td>
                        <td><?= $person['age']?></td>
                        <td><?= $person['addr']?></td>
                        <td><?= $person['mobile']?></td>
                        <td><?= $person['gender']?></td>
                        <td><a href="./delete.php?id=<?= $person['id'] ?>"> DELETE </a></td>
                        <td><a href="./update.php?id=<?= $person['id'] ?>"> UPDATE </a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>