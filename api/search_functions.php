<?php

function name_query($name_order, $name)
{
    global $db_connect;

    if (intval($name) === 0) {
        $sql = 'SELECT * FROM ' . $name_order . ' WHERE name LIKE ?';
        $stmt = $db_connect->prepare($sql);


        $stmt = $db_connect->prepare($sql);
        $stmt->execute([$name]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rows = $stmt->rowCount();

        /* mysqli
        $stmt->bind_param('s', $name);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = mysqli_num_rows($result);
        $results = $result->fetch_assoc();
        */

        if ($rows) {
            $output = $results[rand(0, $rows - 1)];
        } else {
            $output = "error";
        }
    } else {

        /* mysqli
        $sql = 'SELECT * FROM ' . $name_order . ' WHERE id = ?';
        $stmt = $db_connect->prepare($sql);
        $stmt->bind_param('i', $name);
        $stmt->execute();
        $result = $stmt->get_result();
        $results = $result->fetch_assoc();
        */

        $stmt = $db_connect->prepare($sql);
        $stmt->execute([$name]);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        $output = $results;
    }

    return $output;
}
