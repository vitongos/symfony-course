# Demos y fuentes para el curso de Symfony

Estas demos están basadas en la Symfony Demo Application.

## Instalación

A continuación se especifican los comandos necesarios para ejecutar las demos.

### Prerrequisitos

Tener instalados:

- Git
- Docker

### Instalar el repositorio clonándolo de Github

Abrir un terminal en la carpeta personal y ejecutar el siguiente script:

```bash
git clone https://github.com/vitongos/symfony-course.git symfony-src
```

### Levantar los contenedores

Abrir un terminal en la carpeta symfony-src y ejecutar el siguiente script:

```bash
docker-compose up
```

Ahora se podrá acceder al contenedor de php con el comando:

```bash
docker exec -it sf4_php bash
```
