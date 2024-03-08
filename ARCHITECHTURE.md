# Arquitectura del proyecto

El proyecto no sigue ningún paradigma organizativo concreto, pero si utiliza una metodología de estructuración concreta.

Esta metodología hace referencia a los archivos situados en la carpeta `web`.

## Rutas

Cuando hablamos de rutas nos referimos a las URLs disponibles (ejemplo: /login, /info, /perfil, etc).
Si queremos añadir una ruta, simplemente debemos añadirla dentro de la carpeta `web`. Ejemplo: para crear la ruta `/perfil` podemos crear una carpeta dentro de `web` llamada `perfil` y crear un archivo `index.php` dentro.

Cada ruta debería utilizar la función `globalLayout`. Para poder usar esta función debemos importarla usando `'../__internal__/layouts/global.php';` (esta ruta cambia dependiendo de la ruta en la que se encuentre el archivo de la ruta ya que es una ruta relativa).

Esta función necesita un string como parámetro. Este string debe ser el HTML que representa el contenido de la página.

Ejemplo de uso de la función:

```php
<?php
require '../__internal__/layouts/global.php';
globalLayout(<<<EOT
        <div">
            <p>HOLA, SOY EL CONTENIDO DE LA PÁGINA</p>
        </div>
    EOT);
?>
```

# CSS

Si lo necesitamos, podemos crear CSS que **SOLO** afecte a una página en concreto.
Para hacerlo, nos dirigimos a `web/css` y creamos un archivo CSS nuevo (podemos crear carpetas para organizarnos mejor si lo necesitamos). Por ejemplo `pages/perfil.css` (la ruta absoluta sería `web/css/pages/perfil.css`).

Ahora, en el fichero `perfil.php` (del ejemplo anterior) modificamos la función `globalLayout` añadiéndole un segundo parámetro (un array). Debemos añadir una clave nueva llamada `styles` y como su valor añadimos la ruta al fichero CSS partiendo de `web/css` en un array, es decir: `[pages/perfil]`. Ejemplo:

```php
<?php
require '../__internal__/layouts/global.php';
globalLayout(<<<EOT
        <div">
            <p>HOLA, SOY EL CONTENIDO DE LA PÁGINA</p>
        </div>
    EOT, [
        'styles'=>['pages/perfil']
    ]);
?>
```

# JavaScript

Si lo necesitamos, igual que con el CSS, podemos añadir JS que solo se ejecute en una página en concreto.
El procedimiento es el mismo que con el CSS pero con JS.

Creamos el archivo JS en la carpeta `js`, ejemplo `pages/script-perfil.js`.

Ejemplo:

```php
<?php
require '../__internal__/layouts/global.php';
globalLayout(<<<EOT
        <div">
            <p>HOLA, SOY EL CONTENIDO DE LA PÁGINA</p>
        </div>
    EOT, [
        'styles'=>['pages/perfil'],
        'scripts'=>['pages/script-perfil']
    ]);
?>
```

# Utilidades PHP

En cualquier proyecto nos encontramos con código que debe ser reutilizado en varios archivos. Podemos crear archivos que contengan funciones que nos sean de utilizad en múltiples archivos y luego importarlos cuando se anecesario usando `require`. Estos archivos se localizan dentro de la carpeta `__internal__`.
Un ejemplo de código que debería ir dentro de `__internal__` sería la conexión a base de datos.

# API

Si lo necesitamos podemos crear archivos _PHP_ que se comporten como una [API REST](https://www.redhat.com/es/topics/api/what-is-a-rest-api). Estos archivos los debemos incluir dentro de `__api__`.
