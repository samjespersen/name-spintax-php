<?php

    function name_query($name_order, $name)
    {
        global $db_connect;
        $sql = '';

        //check if $name is a string or number
        if (intval($name) === 0) {
            $sql = 'SELECT * FROM ' . $name_order . ' WHERE name LIKE ?';
        } else {
            $sql = 'SELECT * FROM ' . $name_order . ' WHERE id = ?';
        }

        //query db and return results as associate array
        $stmt = $db_connect->prepare($sql);
        $stmt->execute([$name]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //return random item from results
        $rows = $stmt->rowCount();
        return $results[rand(0, $rows - 1)];
    }
