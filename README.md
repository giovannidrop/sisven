Sistema de Gestión de Productos con Laravel y Vue.js

Este proyecto implementa un sistema de gestión de productos básico utilizando Laravel para el backend y Vue.js para el frontend.

Características

Categorías:
Crear, leer, actualizar y eliminar categorías de productos.

Productos:
Crear, leer, actualizar y eliminar productos.
Asignar productos a categorías.

Modos de Pago:
Crear, leer, actualizar y eliminar modos de pago.

Clientes:
Crear, leer, actualizar y eliminar clientes.

Instalación
Backend (Laravel)

Clonar el repositorio: git clone https://github.com/giovannidrop/sisven.git
Instalar las dependencias: composer install
Copiar el archivo .env.example a .env y configurar las variables de entorno, especialmente las credenciales de la base de datos.
Generar una clave de aplicación: php artisan key:generate
Ejecutar las migraciones para crear las tablas de la base de datos: php artisan migrate

Frontend (Vue.js)
Navegar al directorio del frontend: cd frontend
Instalar las dependencias: npm install

Ejecución
Backend
Iniciar el servidor de desarrollo de Laravel: php artisan serve
El backend estará disponible en http://localhost:8000

Frontend
Iniciar el servidor de desarrollo de Vue.js: npm run serve
El frontend estará disponible en http://localhost:8080

Estructura del Proyecto
Backend (Laravel)
app/Models: Modelos Eloquent para cada entidad (Category, Product, PayMode, Customer).
app/Http/Controllers/API: Controladores API para manejar las solicitudes CRUD.
database/migrations: Archivos de migración para crear las tablas de la base de datos.
routes/api.php: Definición de las rutas de la API.

Frontend (Vue.js)
src/components: Componentes Vue.js para cada funcionalidad CRUD.
src/router/index.js: Configuración de las rutas de Vue Router.

Uso
Acceder al frontend en http://localhost:8080.
Utilizar los componentes para gestionar las categorías, productos, modos de pago y clientes.

Tecnologías Utilizadas
Laravel: Framework PHP para el desarrollo del backend.
Vue.js: Framework JavaScript para el desarrollo del frontend.
Axios: Librería para realizar solicitudes HTTP desde el frontend.
Vue Router: Librería para gestionar las rutas del frontend.

Contribuciones
Las contribuciones son bienvenidas. Por favor, crea un fork del repositorio y envía un pull request con tus cambios.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
