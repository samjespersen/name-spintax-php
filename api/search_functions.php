<?php

function name_query($name_order, $name)
{
    global $db_connect;

    if (intval($name) === 0) {
        $sql = 'SELECT * FROM ' . $name_order . ' WHERE name LIKE ?';
        $stmt = $db_connect->prepare($sql);
        $stmt->execute([$name]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $rows = $stmt->rowCount();

        if ($rows) {
            $output = $results[rand(0, $rows - 1)];
        } else {
            $output = "error";
        }
    } else {

        $sql = 'SELECT * FROM ' . $name_order . ' WHERE id = :id';
        $stmt = $db_connect->prepare($sql);
        $stmt->execute(['id' => $name]);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        $output = $results;
    }

    return $output;
}
