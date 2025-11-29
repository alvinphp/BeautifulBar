# BeautifulBar: Cambia el color de la barra de búsqueda en dispositivos móviles

**BeautifulBar** es una clase sencilla de PHP que permite cambiar el color de la barra de búsqueda en dispositivos móviles mediante la etiqueta `meta` `theme-color`. Es útil para personalizar la apariencia de tu sitio web en dispositivos móviles, especialmente cuando se visualiza en navegadores como Chrome y Firefox en Android.

## Características

- **Validación de color**: Asegura que el color proporcionado sea un valor hexadecimal válido.
- **Cambio de color**: Agrega dinámicamente la etiqueta `<meta name="theme-color">` al HTML con el color seleccionado.
- **Manejo de errores**: Incluye manejo de excepciones para asegurar que el color ingresado sea válido.

## Instalación

Para utilizar la librería, simplemente incluye el archivo PHP que contiene la clase `BeautifulBar` en tu proyecto y llama al método correspondiente.

### Ejemplo de uso:

```php
include 'path/to/BeautifulBar.Class.php';  // Asegúrate de usar la ruta correcta del archivo PHP

// Cambia el color de la barra de búsqueda a un tono de color (#ff5733) o muestra un error si el color no es válido
BeautifulBar::AddColorBarBrowser('#ff5733');  
