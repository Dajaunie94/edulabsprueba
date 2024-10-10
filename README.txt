EduLabsPrueba

EduLabsPrueba es una aplicación web construida en Laravel para registrar y autenticar usuarios utilizando un sistema de token básico para la autenticación. La aplicación incluye una interfaz para el registro y autenticación de usuarios, con opciones para gestionar a los usuarios desde un panel.
Características

    Registro de usuarios con validación de datos.   
    Gestión de usuarios desde un panel.
    Funcionalidades implementadas utilizando Laravel UI.
    Uso de base de datos MySQL para almacenamiento de usuarios.
    Sistema de autenticación con remember_token implementado por Laravel.

Requisitos

    PHP 8.0 o superior
    Composer 2.x
    Laravel 9.x
    MySQL 5.7 o superior
 

Instalación

Sigue los pasos a continuación para instalar y configurar el proyecto en tu entorno local:
1. Clonar el repositorio

bash

git clone https://github.com/Dajaunie94/edulabsprueba.git
cd edulabsprueba

2. Instalar dependencias de Composer

bash

composer install

3. Configurar el archivo .env

Copia el archivo .env.example y renómbralo a .env. Luego, actualiza las configuraciones de la base de datos y otros servicios necesarios.

bash

cp .env.example .env

Actualiza las siguientes líneas en el archivo .env para conectarte a tu base de datos MySQL:

plaintext

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=edulabsprueba
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

4. Generar la clave de aplicación

bash

php artisan key:generate

5. Migrar la base de datos

Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

bash

php artisan migrate

6. Ejecutar el servidor de desarrollo

Inicia el servidor de desarrollo para acceder a la aplicación en el navegador:

bash

php artisan serve

Abre tu navegador y navega a http://127.0.0.1:8000 para acceder a la aplicación.