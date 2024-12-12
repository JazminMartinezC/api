# Creacion de API de peliculas usando LARAVEL


#### Para la creación del proyecto en laravel los primeros pasos son la instalación de LARAVEL y demás componentes que se utilzaran en el proceso para crear la API
#### Una vez abierto y detectado Laravel se crean carpetas las cuales serviran para ubicar los contenidos de Controladores, routes, modulos, etc. 

### En el proyecto de nombre API si genera una carpeta app que contiene a Models, en este caso para el proyecto se crean los modelos de películas y usuario cada una de estas tiene ciertos atributos los cuales son:
#### Usuario
##### * nombre
##### * correo
##### * password
##### * foto de perfil
Dentro de Models en el usuario.php se creo de la sigueinte manera:
![image](https://github.com/user-attachments/assets/82d3da09-ea6a-4aee-9e50-307a0fb5c751)

#### Peliculas
##### * nombre
##### * descripción
##### * año de filmación
##### * poster
##### * genero de la pelicula
Dentro de Models en el peliculas.php se creo de la sigueinte manera:
![image](https://github.com/user-attachments/assets/b83458b9-69ed-4f84-8580-20eca532511c)

### En el caso de los controladores para poder hacer consultas a la api se crean los metodos correspondientes.
#### Para los usuarios se crearon los siguientes métodos:
### Usuario
##### Método de obtener usuario
![image](https://github.com/user-attachments/assets/c1360133-e0aa-41e4-94fa-8da910067006)
##### La función retorna a todos los usuarios que esten dentro, con una respuesta 200.

##### Método obtener usaurio por ID
![image](https://github.com/user-attachments/assets/21b38aaa-4ef4-4753-bf9c-9e4778dc1b8d)
##### Para esta función lo que hace es buscar a un usuario por medio de una ID en específico

##### Método insertar usuario
![image](https://github.com/user-attachments/assets/bcb2a94d-ec44-4db0-ad53-de37a30ff246)
##### Para agregar un usuario la función requiere que se tengan todos los datos para hacer la inserción del usuario.

##### Método hacer cambios en el usuario
![image](https://github.com/user-attachments/assets/0260ae9f-73f6-43e5-a56c-12e9c15d48a7)
##### La función se crea para hacer cambios sobre un usuario en específico por tanto se hace en base al ID.

##### Método eliminar usuario
![image](https://github.com/user-attachments/assets/3f519080-85cd-481d-98a7-0c01fa75f5d7)
##### Para hacer eiiminación de usuarios se requiere de un ID para buscarlo en el json. 

#### Para las peliculas se crearon los siguientes métodos:
### Películas
##### Método obtener película
![image](https://github.com/user-attachments/assets/6b914dfb-c53b-4627-9a60-99f6503dad39)


##### Método obtner película por ID

#####

##### Método para insertar Pelicula

#####

##### Método modificar película 


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
