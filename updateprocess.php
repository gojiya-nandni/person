<?php
    include "./connection.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $addr = $_POST['addr'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    $query = "UPDATE person_detail SET name=(?), age=(?), addr=(?), mobile=(?), gender=(?) WHERE id=(?); ";
    $param = [$name, $age, $addr, $mobile, $gender, $id];
    $statement = $connection->prepare($query);
    $row = $statement->execute($param);

    if ($row > 0)
    {
        return header('Location: ./index.php');
    }
    else
    {
        echo "Failed to insert data";
    }

?>