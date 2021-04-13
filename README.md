# Ecommerce básico en Laravel 8

## Instalación
#### 1.  Instalamos dependencias para PHP
    ```composer install```
#### 2. Instalamos dependencias para Javascript
    ```npm install```
#### 3. Reemplzamos en el archivo .env con nuestras credenciales de base de datos
   ```DB_CONNECTION=mysql
    DB_HOST=<ip_server>
    DB_PORT=3306
    DB_DATABASE=<name_db>
    DB_USERNAME=<user_db>
    DB_PASSWORD=<password_db> ```
#### 4. Ejecutamos la migración de Laravel con seeders
    ```php artisan migrate:fresh --seed```
    
## Ejecución

### Inicializamos el servidor
    ```php artisan serve```