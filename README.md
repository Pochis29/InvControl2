# Invcontrol - Proyecto Académico

Sistema de control de inventario desarrollado como proyecto académico.

## Estructura del Proyecto

```
├── app/              # Lógica de aplicación
├── config/           # Configuraciones
├── database/         # Base de datos
├── index.php         # Punto de entrada
├── docker-compose.yml
└── Dockerfile
```

## Requisitos

- PHP 8.0+
- Docker & Docker Compose
- Composer

## Instalación

```bash
# Configurar variables de entorno
cp .env.example .env

# Levantar contenedores
docker-compose up -d

# Instalar dependencias
composer install
```

## Acceso

http://localhost:8000
