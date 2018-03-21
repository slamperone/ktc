## Reto técnico catálogo de refacciones
  **Requerimientos**
  * -PHP 7.x >
  * -mariadb 10.x >
  * -Laravel 5.x >
  * -Apache 2.x


  **Archivos incluidos
   + Diagrama ER en workbench /resorces/dev/diagrama.mwb
   + Archivo .sql para importar
   + Archivos fuente en Laravel
   + Archivos de plantilla (frontend)


  **Instalación**
	+ Copiar contenido de /public/* en carpeta publica del servidor web.
	+ Copiar resto de archivos/carpetas fuera de la carpeta publica (un nivel).
	+ Importar bdd /resources/dev/ktc_2018-03-21.sql.
	+ Configurar variables de entorno (varía en cada web server).


-------

   > Mediante migrations de Laravel se generaron registros para la tabla productos, las otras dos tablas (manufacturer & categories) se llenaron de forma manual.

   >Usando artisan se generaron dos controladores y dos modelos que consumen la BDD basada en mariadbb y mediante objetos de PHP alimentan el frontend, está estructurada para tener controladores en cada sección del sitio y que cada uno de estos se encargue de hacer gestión independiente (catalogo & productos) para que de esta forma se facilmente esclable, se puede agregar tantos módulos como sean necesarios sin necesidad de afectar lo ya desarrollado.

	![Catalogo de categorías](https://develupme.com/ktc-home.png)

	![Menú de categorías](https://develupme.com/ktc-menu.png)

	![Productos filtrados por categoría](https://develupme.com/ktc-cats.png)

	![Página de detalle del producto](https://develupme.com/ktc-detalle.png)
	
	![Captura de la tabla productos llenada mediante la clase $faker](https://develupme.com/ktc-detalle.png)



