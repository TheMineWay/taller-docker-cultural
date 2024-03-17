# 🛠️ Programas y extensiones

## Git

Necesitamos instalar **git**:

```bash
sudo apt-get install git
```

## Docker compose

Necesitamos instalar la utilidad de **docker compose**:

```bash
sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
```

Le otrogamos los permisos correspondientes:

```bash
sudo chmod +x /usr/local/bin/docker-compose
```

## Extensiones

El taller es agnóstico; no está ligado a ninguna herramienta en concreto. Sin embargo, para facilitarlo os recomendamos utilizar VSCode con las extensiones:

- [Docker](vscode:extension/ms-azuretools.vscode-docker)

Asímismo, para acceder a la base de datos recomendamos utilizar [DBeaver](https://dbeaver.io/download/).
