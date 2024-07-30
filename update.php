<?php
    require './connection.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM person_detail WHERE id=(?) ";
    $params = [$id];
    $statement = $connection->prepare($query);
    $statement->execute($params);
    $person = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./updateprocess.php" method="post">
        <input type="hidden" name="id" value="<?= $person['id'] ?>">
        <input type="text" name="name" id="" placeholder="Enter Your Name" value="<?= $person['name'] ?>">
        <input type="text" name="age" id="" placeholder="Enter Your Age" value="<?= $person['age'] ?>">
        <input type="text" name="addr" id="" placeholder="Enter Your Address" value="<?= $person['addr'] ?>">
        <input type="text" name="mobile" id="" placeholder="Enter Your Mobile Number" value="<?= $person['mobile'] ?>">
        <input type="text" name="gender" id="" placeholder="Enter Your Gender" value="<?= $person['gender'] ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>