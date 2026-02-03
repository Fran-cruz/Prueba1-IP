###### **Pasos realizados para completar la práctica**



1. Se creó un repositorio público en GitHub para almacenar el proyecto correspondiente a la primera prueba del primer parcial.



[https://github.com/Fran-cruz/Prueba1-IP](https://github.com/Fran-cruz/Prueba1-IP)


2\. Se inicializó el repositorio en la máquina local utilizando *'git init'*.


3\. Se diseñó el esquema de la base de datos, definiendo las tablas y sus relaciones antes de la implementación.


4\. Se definieron las siguientes tablas con sus respectivos campos:



* **Student**

*- id*

*- name*

*- acc\_num*

*- email*

*- phone*

*- address*

*- ref*

*- active (boolean)*

*- faculty\_id*



* **Faculty**

*- id*

*- name*



* **Course**

*- id*

*- name*

*- active (boolean)*

*- details*



5\. Se creó el proyecto de Laravel utilizando la estructura estándar del framework.



6\. Se generaron las migraciones respetando el orden correcto para evitar conflictos de llaves foráneas:



Faculty -> Student -> Course



7\. Se añadieron los campos correspondientes en cada migración utilizando *'$table->string()'*, *'$table->boolean()'* y otros tipos de datos según correspondía.



8\. Se configuraron los modelos agregando la propiedad '*protected $fillable'* para permitir la asignación masiva de los campos definidos.



9\. Se creó una migración adicional para representar la relación Muchos a Muchos (N–N) entre las tablas *'Student'* y *'Course'*.



10\. Se agregaron las llaves foráneas en las tablas correspondientes para asegurar la integridad referencial de la base de datos.



11\. Se implementaron las funciones públicas de relación en los modelos:



Relaciones *'belongsTo'*, *'hasMany'*, *'belongsToMany'*



12\. Se configuró el archivo .env con los datos correctos de conexión a la base de datos (*'DB\_DATABASE'*, *'DB\_USERNAME'*, *'DB\_PASSWORD'*).



13\. Se ejecutaron las migraciones para crear las tablas y verificar su correcta visualización en MySQL.



14\. Se agregaron todos los archivos del proyecto al control de versiones con *'git add ./'*.



15\. Se realizó el commit incluyendo todo el proyecto completo.



16\. Finalmente, se ejecutó el push para subir el proyecto completo al repositorio en la nube en GitHub.

