<?php
    require('./__internal__/layouts/global.php');

    globalLayout(<<<EOT
        <div class="full-center container">
            <div class="row gy-2 justify-content-center" style="width: 100%">
                <button id="checkDatabase" class="btn btn-primary col-sm-6">
                    Comprobar base de datos
                </button>
                <div id="successfulDB" class="alert alert-success col-sm-7" role="alert" hidden>
                    Se ha inicializado la base de datos correctamente
                </div>
                <div id="alreadyDB" class="alert alert-success col-sm-7" role="alert" hidden>
                    La base de datos ya está inicializada
                </div>
            </div>
        </div>
    EOT, [
        "scripts"=>[
            "db/database-checker"
        ]
    ]);
?>