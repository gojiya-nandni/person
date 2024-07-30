<?php
    require "./connection.php";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $addr = $_POST['addr'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO person_detail (name, age, addr, mobile, gender) VALUES (?, ?, ?, ?, ?)";
    $params = [$name, $age, $addr, $mobile, $gender];
    $statement = $connection->prepare($query);
    $row = $statement->execute($params);

    if ($row > 0)
    {
        return header('Location: ./index.php');
    }
    else
    {
        echo "Failed to insert data";
    }

?>