## Prueba técnicaCodeigniter

Este proyecto esta diseñado para verificar los conocimientos adquiridos en las siguientes tecnologías:

 - PHP (7+ | 8)
 - Composer
 - JavaScript
 - Jquery
 - CSS (bootstrap)
 - Codeigniter (3 | 4)
 - Inglés 
 - Habilidades investigacionales (lectura de documentación)
 - Git
 - MySQL

## Descripción de la prueba

Se va a diseñar un sistema para administración de libros en una biblioteca. Esta debe contar con apartados para agregar UNICAMENTE libros y autores. Un autor debe tener multiples libros, así como un libro debe tener multiples autores. Un autor necesita crearse en el sistema sin poseer libros, pero un libro debe tener al menos un autor para ser creado. Los libros, así como los autores, deben mostrarse en una tabla (una tabla para libros y otra para autores) la cual contará con botones para ver detalles del libro, editarlo o eliminarlo. Los autores contaran con la misma característica, con la diferencia de que estos no pueden ser eliminados de la db, sino ocultos a las peticiones de autores explicitamente (soft deletes) (Si un libro tiene un autor en la lista que ha sido "eliminado", este aun se debe mostrar). Las informaciones de los libros y autores pueden mostrarse de la manera que considere. En el siguiente apendice se mencionaran los datos a guardar en la db :

### Datos de los autores

 - Nombre 
 - Apellido 
 - País 
 - Fecha de registro *
 - Cantidad de libros en el sistema *

### Datos de los libros
- Nombre
- Fecha de publicación
- Edición
- Autores *


## Detalles técnicos

 1. La base de datos, aún si es corta debe estar correctamente normalizada (el codigo en sí puede estar relacionado, pero no es un requisito).
 2. Se debera usar uno de los frameworks de codeigniter arriba mencionados, pero cual usar esta a disposición del pasante.
 3. El diseño de la app no debe seguir ningun patrón especifico, pero tanto los elementos como los colores deben ser uniformes uno con otro.
 4. Las llamadas a eventos pueden ser de manera regular (guardar formularios a través de POST o GET) o puede usarse [Ajax](https://guias.makeitreal.camp/jquery/realizando-peticiones-con-ajax).
 5. Deben realizarse commits continuos al repositorio para el seguimiento de la prueba. Estos deben ser concisos y estar debidamente organizados.
 6. Los campos con asterisco (*) no deben aparecer en la tabla a mostrar, pero si en los detalles del elemento (La lista de autores no se debe ver en la tabla pero si se quiere ver la información del libro, debe aparecer).

## ¿Qué se tomará en cuenta?

 - Patrón de diseño
 - Calidad del codigo
 - Diseño de la base de datos
 - Librerías de apoyo utilizadas (Jquery, Datatables, [Bootstrap Select](https://developer.snapappointments.com/bootstrap-select/)).

## Detalles de las asignaciones técnicas

 - La palabra clave DEBE significa que el enunciado es requerido y no puede alterarse.
 - La palabra clave NECESITA signifca que el enunciado es requerido, pero la ejecución está a libre interpretación.
 - La palabra clave PUEDE significa que el requisito no es necesario, no se tomará en cuenta en la puntuación, pero que sirve para practicar algo que podrías (o no) ver en el entorno laboral. 
 
 ## Recomendaciones
 - Se pueden usar (pero no se limite a usar) modals para la visualización de los datos.
 - Si ajax se torna complicado, se puede usar el metodo regular de almacenamiento de datos (POST)
 - Para el soft delete de los autores, cree un campo extra que guarde la fecha eliminada o un valor boolean para identificar que fue eliminado (recuerde que aun deben aparecer en la sección de libros si se necesita).
 - Se puede preguntar cualquier duda sobre la practica en el horario de 10AM-5PM.
 - Se vale cometer errores y explicar como se solucionaron (o se trataron de solucionar) puede dar más puntos que quitarlos.

