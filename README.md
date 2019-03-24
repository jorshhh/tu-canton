# Prueba tu canton

Este es un test montado usando Laravel+Vuejs

Los requerimentos son: 

1. Tener composer instalado
2. Tener npm instalado
3. Tener una base de datos MySQL lista

## Instalacion


Primero clonamos el proyecto y entramos a la carpeta creada
```
git clone https://github.com/jorshhh/tu-canton.git
```

Instalamos las dependencias usando composer
```
composer install
```

Actualizamos npm - puede que necesitemos usar sudo en este comando
```
npm install npm -g
```

Instalamos las dependencias usando npm
```
npm install 
```

Copiamos .env.example a .env y en este archivo llenamos los datos de mysql (DB_DATABASE, DB_USERNAME, DB_PASSWORD)
```
cp .env.example .env
```

Generamos la llave de la app
```
php artisan key:generate
```

Creamos la base de datos y hacemos el seeding
```
php artisan migrate
```
