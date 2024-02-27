<?php
    // Importamos el layout global (nos proporciona una base sobre la que trabajar, en la que se ha instalado Bootstrap)
    require './__internal__/layouts/global.php';

    // Importamos las utilidades de base de datos
    require './__internal__/utils/db.php';


    $countFrases = query(<<<EOT
        SELECT COUNT(f.id) AS 'count'
        FROM taller.frases f;
    EOT)[0]['count'];

    $picked = rand(0, $countFrases - 1);

    $fraseRandom = query(<<<EOT
        SELECT *
        FROM taller.frases f
        LIMIT 1
        OFFSET $picked;
    EOT)[0];

    $frase = $fraseRandom['frase'];
    $pista = $fraseRandom['pista'];

    globalLayout(<<<EOT
        <div class="container">
            <h1></h1>
            <h2><b>Pista: </b>$pista</h2>
            <small>Pulsa la tecla que represente la letra que quieres resolver</small>

            <script>
                // Forma muy chapuza de pasarle la frase al JS
                var frase = "$frase";
            </script>
        </div>
    EOT, [
        "styles"=>[
            "pages/play"
        ],
        "scripts"=>[
            "pages/play"
        ]
    ]);
?>