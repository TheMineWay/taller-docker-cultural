<?php
    $storedConnection = null;

    function openConnection() {
        $hostname = "host.docker.internal"; // Apuntamos a la dirección del propio contenedor
        $username = "root";
        $password = "example";
    
        // Creamos el objeto de conexión
        $connection = new mysqli($hostname, $username, $password, "taller");
    
        // Comprobamos la conexión
        if ($connection->connect_error) {
            die("No se ha podido conectar a la base de datos" . $connection->connect_error);
        }

        return $connection;
    }
    
    function runQuery(string $queryText) {
        if (!isset($storedConnection)) {
            $storedConnection = openConnection();
        }

        return $storedConnection->query($queryText);
    }

    function query(string $queryText) {
        $resultArr = [];
        $result = runQuery($queryText);

        while ($row = $result->fetch_assoc()) {
            array_push($resultArr, $row);
        }

        return $resultArr;
    }

    function dmlQuery(string $queryText) {
        runQuery($queryText);
    }
?>