<?php
    // Importamos el layout global (nos proporciona una base sobre la que trabajar, en la que se ha instalado Bootstrap)
    require './__internal__/layouts/global.php';

    // Lanzamos nuestro contenido dentro del layout global
    globalLayout(<<<EOT
        <div class="full-center background">
            <h1>¡Todo listo!</h1>
            <p>El proyecto se ha lanzado correctamente</p>
            <div class="actions">
                <button
                    role="link"
                    class="btn btn-secondary"
                    onclick="openUrl('/check-database.php')"
                >
                    Comprobación de la base de datos
                </button>
                <button
                    role="link"
                    class="btn btn-primary"
                    onclick="openUrl('/play.php')"
                >
                    Iniciar
                </button>
            </div>
        </div>
    EOT, [
        "styles"=>["pages/index"]
    ]);
?>