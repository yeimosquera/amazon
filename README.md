# Prueba de Desarrollo con Laravel

## Descripción del Proyecto

Esta prueba está diseñada para evaluar tus habilidades en el desarrollo con Laravel, específicamente en la creación de una maqueta web y la implementación de funcionalidades utilizando AJAX. A continuación se detallan los requisitos y expectativas para completar esta prueba.

## Requisitos

1. **Creación de Maqueta**
   - **Descripción**: Se te proporcionará un diseño específico que debes replicar fielmente. La maqueta debe reflejar con precisión los detalles del diseño en términos de estructura, estilo y funcionalidad.
   - **Objetivo**: Evaluar tu capacidad para implementar una interfaz de usuario (UI) que respete las especificaciones dadas y proporcione una experiencia de usuario coherente.

2. **Guardar Datos con AJAX**
   - **Descripción**: Debes implementar una funcionalidad que permita guardar datos en una base de datos utilizando AJAX. Esto implica que los datos deben ser enviados al servidor y almacenados en la base de datos sin necesidad de recargar la página.
   - **Objetivo**: Evaluar tu habilidad para manejar operaciones asincrónicas con AJAX y garantizar que los datos se gestionen correctamente en el backend.

3. **Uso de Laravel**
   - **Descripción**: La aplicación debe estar desarrollada usando el framework Laravel. Deberás seguir las convenciones de Laravel tanto en el desarrollo del backend como en las interacciones con la base de datos.
   - **Objetivo**: Evaluar tu conocimiento en el uso de Laravel para construir aplicaciones web robustas y bien estructuradas.

4. **Repositorio Público**
   - **Descripción**: El código fuente del proyecto debe ser subido a un repositorio público en plataformas como GitHub o GitLab.
   - **Objetivo**: Permitir que el código sea accesible para revisión y evaluación por parte del equipo de desarrollo.

5. **URL del Repositorio y Descripción**
   - **Descripción**: Debes proporcionar la URL del repositorio donde has subido el proyecto. Además, incluye una breve descripción en el archivo `README.md` sobre cómo ejecutar el proyecto localmente.
   - **Objetivo**: Facilitar la revisión del proyecto proporcionando instrucciones claras sobre cómo clonar, configurar y ejecutar la aplicación en un entorno local.
## Requerimientos locales:
| Herramienta | Versión |
| ------ | ------ |
| Composer |  2.7.7 |
| Xampp |  8.2 |


## Cómo Clonar el Repositorio

```bash
git clone https://github.com/yeimosquera/amazon.git
```
## Cómo Instalar las Dependencias del Proyecto
Navega al directorio del proyecto y ejecuta:
```bash
composer install
```

## Cómo Configurar el Entorno
1. Copia el archivo .env.example a .env:
```bash
copy .env.example .env

```
2. Configura las variables de entorno en el archivo .env según tus necesidades, en mi caso tenía instalado Xampp y solo tube que ir a phpadmin y crear la base de datos amazon:
   
 ![image](https://github.com/user-attachments/assets/7d1dd8b1-80a8-45ad-ace5-7e405788e05d)
 
 ![image](https://github.com/user-attachments/assets/5b7d627a-6001-442f-be94-559b0676fe17)

  ![image](https://github.com/user-attachments/assets/7a08313f-69d0-4ffc-a5cd-e898391c9103)


3. ejecutar las migraciones para que cree todas las tablas, usa el comando:
   ```bash
    php artisan make:migration
   ```


## Cómo Ejecutar el Servidor de Desarrollo de Laravel

```bash 
php artisan serve
```

![image](https://github.com/user-attachments/assets/83f2b2b8-7fa9-4864-90fc-30901c2319e9)

