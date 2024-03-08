# 🐳 Taller Docker (PHP + MySQL)

Bievenid@s al taller de dockerización de PHP y MySQL.

Es importante revisar el archivo de [extensiones y programas necesarios](./SOFTWARE.md).

## 0. Clonar el proyecto

Para poder empezar debéis clonar este repositorio en vuestro local. Para ello usad el comando:

```sh
git clone https://github.com/TheMineWay/taller-docker-cultural
```

Este comando os habrá creado una carpeta llamada **taller-docker** en el mismo directorio en el que habéis lanzado el comando.

## 1. Iniciar los contenedores

Una vez tenemos el proyecto en local es momento de iniciar los contenedores. Para ello, simplemente ejecutamos:

```sh
docker compose up --build
```

Este comando levantará los contenedores. Una vez estén levantados ya estarán disponibles los servicios.

## 2. Conexión a la base de datos

Abrimos el cliente de base de datos (si habéis seguido el manual de software deberíais tener disponible DBeaver). La base de datos está alojada en `localhost` en el puerto `3306`. El usuario es `root` y su contraseña es `example`.

Una vez estemos conectados a la base de datos, debemos crear una base de datos nueva llamada `taller`.

## 3. Acceso a la web

Para poder ver la web en sí, debemos abrir nuestro navegador web y acceder a [localhost](http://localhost). Si todo ha ido correctamente veremos una página con colorines de fondo y dos botones.

### 3.0. Auto generación del DB schema

Si pulsamos sobre el botón de la izquierda se iniciará el proceso de generación del esquema de base de datos y rellenado de datos demo.
Una vez este proceso haya finalizado se debería haber generado una tabla llamada `frases` en la base de datos `taller`.

## 4. ¡Todo listo!

Ahora ya tenemos el proyecto montado y funcionando. Si le dáis a jugar se abrirá una página con un minijuego (así le damos un poco de contenido a la web, que queda mejor que una pantalla con un título 😁).

**Podéis consultar la arquitectura del proyecto [aquí](./ARCHITECHTURE.md)**
