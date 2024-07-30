<?php
    require "./connection.php";

    $id = $_GET['id'];

    $query = "DELETE FROM person_detail WHERE id=(?); ";
    $param = [$id];
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