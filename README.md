<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel API Autor-Articulos
Este proyecto es una API sencilla hecha en Laravel 7.28.4.
La manera de instalarlo se describira a continuacion.

### Pasos para la instalacion y uso
1. Clonar el repo con el comando: <br>
`git clone https://github.com/VM17015/ApiAutor.git` 
<br><br>
2. Entrar a la carpeta: <br>
`cd ApiAutor`
<br><br>
3. Ejecutar composer para instalar dependencias:<br>
`composer install`
<br><br>
4. Copiar el archivo '.env.example' para generar un nuevo archivo de variables de entorno: <br>
`cp .env.example .env`
<br><br>
5. Generar la llave de seguridad para el proyecto: <br>
`php artisan key:generate`
<br><br>
6. Dentro de el archivo de variables de se modifican las variables referentes a la base de datos (aca se da un ejemplo):<br>
`DB_CONNECTION=mysql` <br>
`DB_HOST=127.0.0.1` <br>
`DB_PORT=3306` <br>
`DB_DATABASE=api_autor` <br>
`DB_USERNAME=root` <br>
`DB_PASSWORD=` <br>
<br>
7. Una vez configurado la conexion a la base de datos, se deben correr las migraciones: <br>
`php artisan migrate` <br><br>
8. Y luego solo falta correr el servidor: <br>
`php artisan serve`


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
