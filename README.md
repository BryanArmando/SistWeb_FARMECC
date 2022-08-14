# **Trabajo de Integración Curricular:** 

![imagen](https://user-images.githubusercontent.com/58041267/184558340-5a5ad2a7-6578-44fb-be0c-49e7da7a3756.png)

## Carrera: Desarrollo de Software


> ######  **Estudiante:** Diana Katherine Almeida Anchatuña

> ######  Perfil: [@AlmDiana](https://github.com/AlmDiana)

## Documentación:
> ######  [Informe Técnico](https://github.com/AlmDiana)

> ######  [Manual de usuario](https://github.com/AlmDiana)

## Accesso al sistema web de FARMECC en producción:

> ######  [Web FARMECC](http://web-farmecc.herokuapp.com/)

## Instalación del Sistema Web de FARMECC (local):

1. Clonar el proyecto
```
https://github.com/AlmDiana/SistWeb_FARMECC.git
```

2. Abrir un terminal en la carpeta del proyecto y ejecutar los comandos presentados a continuación, con la finalidad de instalar las dependencias
```
composer install
npm install
```

3. Crear un archivo .env dentro del directorio principal del proyecto o simplemente duplicar el archivo **.env.example**

4. Generar la clave de aplicación.
```
php artisan key:generate
```
5. Ejecutar los siguientes comandos para correr el sistema web.
```
npm run dev
php artisan serve
```

Con ello se presentará un mensaje como el siguiente:
```
Laravel development server started on http://localhost:8000/
```
El proyecto se visualiza ingresando al link mencionado o puede dar click 
[aquí](http://localhost:8000/) para abrir directamente.






