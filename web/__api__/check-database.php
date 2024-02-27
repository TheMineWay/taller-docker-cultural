<?php
    require("../__internal__/utils/db.php");

    $rows = query("SHOW TABLES LIKE 'frases';");
    
    if (count($rows) > 0) {
        http_response_code(200);
    }

    // Empezamos a crear las tablas

    dmlQuery(<<<EOT
        CREATE TABLE `frases` (
            `id` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la frase',
            `frase` varchar(128) NOT NULL COMMENT 'Frase',
            `pista` varchar(256) NOT NULL,
            `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha en la que se ha creado la frase',
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
    EOT);

    dmlQuery(<<<EOT
        INSERT INTO taller.frases
            (frase, pista)
        VALUES
            ('php', 'Le gusta mucho a Raquel'),
            ('excel', 'No es una base de datos pero las empresas creen que lo es'),
            ('visual studio code', 'El IDE Open Source creado por Microsoft más utilizado'),
            ('localhost', 'La forma en la que llaman l@s devs a casa'),
            ('avg lol player', 'Persona que no sale de casa'),
            ('cisco', 'Empresa de redes y sinónimo de Paco'),
            ('mecano', 'Gran grupo musical'),
            ('bicis', 'Que forma tenían las figuras que hacía el padre de Jose Luis Torrente'),
            ('yo soy esa', 'Gran canción de Carmen de Mairena');
    EOT);

    http_response_code(201);
?>