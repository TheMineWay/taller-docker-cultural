<?php
function globalLayout(string $content, $props = []) {

    $styles = $props["styles"] ?? [];
    $scripts = $props["scripts"] ?? [];
    $dynamicStyles = "";
    $dynamicScripts = "";

    // Montamos el import de los estilos
    foreach ($styles as $style) {
        $dynamicStyles .= "\n<link rel=\"stylesheet\" href=\"/css/$style.css\"/>";
    }

    // Montamos el import de los scripts
    foreach ($scripts as $script) {
        $dynamicScripts .= "\n<script src=\"/js/$script.js\"></script>";
    }

    echo "
        <!DOCTYPE html>
        <html lang=\"es\">
            <head>
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                <title>Mi página</title>

                <!-- Cargamos Bootstrap desde su CDN -->
                <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">

                <!-- Si queremos usar Tailwind CSS, podemos descomentar la línea de abajo -->
                <!--<script src=\"https://cdn.tailwindcss.com\"></script>-->

                <!-- Podemos añadir más etiquetas de Head que se aplicarán a toda la web. Por ejemplo: Google Tag Manager, Google Analytics, Microsoft Clarity, etc -->
            
                <!-- Cargamos nuestros archivos de CSS global -->
                <link rel=\"stylesheet\" href=\"/css/global.css\"/>

                <!-- Estilos dinámicamente importados -->
                ".$dynamicStyles."
            </head>
            <body>
                $content

                <!-- Cargamos el JS de Bootstrap desde su CDN -->
                <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
                
                <!-- Cargamos el script global -->
                <script src=\"/js/global.js\"></script>

                <!-- Scripts dinámicamente importados -->
                ".$dynamicScripts."
            </body>
        </html>
    ";
}
?>