# TechSolution Group - Sistema de Gestion de Proyectos

Proyecto en Laravel para la gestion de proyectos de TechSolution Group. Permite crear, listar, actualizar y borrar proyectos, con registro e inicio de sesion de usuarios via JWT.

## Requisitos

- PHP 8.2 o superior
- Composer
- Node.js + npm
- MySQL

## Instalacion

1. Descomprimir/clonar el proyecto y entrar a la carpeta.
2. Instalar dependencias:
   ```
   composer install
   npm install
   ```
3. Copiar el archivo de entorno y generar la key de la app:
   ```
   cp .env.example .env
   php artisan key:generate
   ```
4. `key:generate` no genera el `JWT_SECRET` (se usa para firmar los tokens de login), asi que hay que generarlo aparte y pegarlo en el `.env`:
   ```
   php -r "echo bin2hex(random_bytes(32));"
   ```
5. Crear la base de datos en MySQL (usuario y clave ya vienen en `.env.example`, tal como pide la pauta):
   ```sql
   CREATE DATABASE desarrollo_software_1;
   ```
   (MySQL se puede tener corriendo con Homebrew en Mac o con el instalador/winget en Windows, no hace falta Laragon ni XAMPP.)
6. Migrar y cargar datos de ejemplo:
   ```
   php artisan migrate
   php artisan db:seed
   ```
7. Compilar los estilos:
   ```
   npm run build
   ```
8. Levantar el servidor:
   ```
   php artisan serve
   ```
   Y abrir http://127.0.0.1:8000

## Funcionalidades

- Registro de usuario, con la clave cifrada (bcrypt).
- Inicio de sesion, que devuelve un JWT guardado en una cookie httpOnly.
- CRUD de proyectos (crear, listar, actualizar, borrar).
- Las rutas para crear/editar/borrar proyectos piden estar logueado (middleware que valida el JWT).
- Cada proyecto guarda que usuario lo creo (`created_by`).
